<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        $role = Role::all();
        return view('admin.modul-role.role-table',compact('role','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }
    public function create()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get(); 
       return view('admin.modul-role.role-create',compact('dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function store(Request $request)
    {
       $role = Auth::user()->userole();
       $role->create($request->except('_token'));
       return redirect()->route('admin.role.table');
    }
}
