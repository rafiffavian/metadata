<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\Role;
use App\Simrole;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function index($id)
    {
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get(); 
        $id_role = $id;
        $nama_role = Role::find($id);
        $sim = Menu::all();
        // dd($sim);
        $auth_id = Auth::user()->id;
        return view('admin.modul-permission.permission-table', compact('sim', 'nama_role', 'id_role', 'auth_id','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        // $data['id_sim'] = $id;
        if (!empty($data['permission'])) {
            $permissions = $data['permission'];
        }


        Simrole::where([
            'id_user' => $data['id_user'],
        ])->update([
            'permission' => 0
        ]);

        if (!empty($permissions)) {
            foreach ($permissions as $key => $z) {
                if ($z === 'on') {
                    $check = 1;
                } else {
                    $check = 0;
                }

                // $result[$key] = [
                //     'id_sim' => $key,
                //     'id_user' => Auth::user()->id,
                //     'permission' => $check
                // ];
                $save = Simrole::updateOrCreate(
                    [
                        'id_sim' => $key,
                        'id_user' => Auth::user()->id,
                        'id_role' => $id,
                    ],
                    [
                        'permission' => $check
                    ]
                );
                // $save->id_sim = $key;
                // $save->id_user =  Auth::user()->id;
                // $save->permission = $check;
                // $save->save();
            }
        }


        return redirect(route('permission.index', ['id'=>$id]));
    }

    public static function getStatusCheck($id_sim_roles,$id_role)
    {
        $data = Simrole::where([
            'id_sim' => $id_sim_roles,
            'id_role' => $id_role
        ])->first();

        return $data;
    }
}
