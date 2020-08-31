<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Database;
use App\Simrole;
use App\User;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-menu.menu', compact('dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function store(Request $request)
    {
        Menu::create([
            'name' => $request->name,
            'id_category' => $request->id_category
        ]);
        return redirect('/index');
    }

    public static function checkPriv($id_menu,$id_role)
    {
        
        if (Auth::user()->myrole->name == 'Admin') {
            //for admin
            $simDatabase = Simrole::where([
               
                'id_sim' => $id_menu,
                
                
            ])->first();
          dd($simDatabase);  
        } else {
            $simDatabase = Simrole::where([
               
                'id_sim' => $id_menu,
                'id_role' => Auth::user()->id_role //3

            ])->first();
        }
        
        dd($simDatabase);
        return $simDatabase;
        dd($simDatabase);
    }

}
