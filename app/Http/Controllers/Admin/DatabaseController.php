<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\Database;
use App\Dbrole;
use App\Table;
use App\User;
use App\Tbrole;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        //
    }

    public function post_index_db(Request $request, $id)
    {

        $role = Auth::user()->id_role;
        $nama_sim = Sim::find($id);
        $input_text =  $request->text_search_db;
        $databases = Database::where('name', 'ilike', '%' . $input_text . '%')->where('id_sim', $id)->orderBy('name', 'asc')->paginate(5);
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-database.database-table', compact('databases', 'nama_sim','role','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_data($id)
    {
        $id_sim = $id;
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-database.database-create', compact('id_sim','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public static function checkPriv($id_sim,$id_database,$id_role)
    {
        if (Auth::user()->id_role == 1) {
            //for admin
            $dbDatabase = Dbrole::where([
               
                'id_sim' => $id_sim,
                'id_database' => $id_database
            ])->first();
            
        } else {
            $dbDatabase = Dbrole::where([
               
                'id_sim' => $id_sim,
                'id_database' => $id_database, //7
                'id_role' => Auth::user()->id_role //3

            ])->first();
        }
        // dd($dbDatabase->permission);
        return $dbDatabase;
    }
    

    public function create(Request $request)
    {
        $sim = Auth::user()->simku();
        $sim->create($request->except('_token'));
        return redirect(route('sim.index'));
    }

    public function store_data(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        $data['id_sim'] = $id;
        $save = Database::create($data);
        return redirect(route('sim.show', $id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_sim = Database::find($id)->id_sim;
        $role = Auth::user()->id_role;
        $nama_database = Database::find($id);
        $tables = Table::where('id_database', $id)->orderBy('name', 'asc')->paginate(5);
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-table.isi_table-table', compact('tables', 'nama_database','role','id_sim','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        $data['id_sim'] = $id;
        $save = Database::create($data);
        return redirect(route('sim.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
