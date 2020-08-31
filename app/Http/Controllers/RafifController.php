<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Database;
use App\Simrole;
use App\User;
use Illuminate\Support\Facades\Auth;

class RafifController extends Controller
{
    public function index()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('layouts.master', compact('dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function profile()
    {
        return view('admin.rafif.sim-profile');
    }

    public function layanan()
    {
        return view('admin.rafif.sim-layanan');
    }

    public function warehouse()
    {
        return view('admin.rafif.sim-wh');
    }

    public function mart()
    {
        return view('admin.rafif.sim-mart');
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
        
        // dd($simDatabase);
        return $simDatabase;
        // dd($simDatabase);
    }
}
