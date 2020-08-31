<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Download;
use App\Table;
use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class DownloadController extends Controller
{
    public function index($id)
    {
        $id_table = $id;
        $nama_table = Table::find($id);
        $download = Download::where('id_table',$id)->get();
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-download.download-table',compact('id_table','download','nama_table','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function create($id)
    {
        $id_table = $id;
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-download.download-create',compact('id_table','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function store(Request $request, $id)
    {
      
        $file =  $request->file('file');
        $fileNameArr = explode('.',$file->getClientOriginalName());
        $fileName = $fileNameArr[0] . '-' . time() . '.' . $fileNameArr[1];
        $file->move('fileUpload', $fileName);

        $data = $request->all();
        $data['id_user'] = Auth::user()->id; 
        $data['id_table'] = $id; 
        unset($data['tahun']);
        unset($data['bulan']);
        unset($data['tanggal']);
        unset($data['token']);
        $data['file'] = $fileName;

        $save = Download::create($data);

        if(!$save){
            File::delete('fileUpload/'.$fileName);
        } else{
            return redirect()->route('download.index',$id);
        }
    }

    public function download(Request $request,$id)
    {
        $file = Download::where('id', $id)->firstOrFail();
        $path = public_path(). '/fileUpload/';
        return response()->download($path, $file
            ->original_filename);
    }

    public function back($id)
    {
        return redirect(route('database.show',$id));
        
    }
}
