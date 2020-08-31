<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        $admin = User::all();
        return view('admin.modul-user.admin-table',compact('admin','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }
    public function create()
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
       $role = Role::all();
       return view('admin.modul-user.admin-create',compact('role','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function store(Request $request)
    {
       $data = $request->all();
       $data['password'] = bcrypt($request->password); 
       $data['id_user'] = Auth::user()->id;
       $save = User::create($data);
       return redirect()->route('admin.user.table');
    }
}
