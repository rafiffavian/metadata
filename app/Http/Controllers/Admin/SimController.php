<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\Database;
use App\Simrole;
use App\User;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        Auth::user()->id_role;
        $sim = Sim::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.modul-sim.sim-table',compact('sim'));
    }

    public function post_index(Request $request)
    {
        $input_text =  $request->text_search_sim;
        $sim = Sim::where('name','ilike','%'. $input_text . '%')->paginate(5);
        return view('admin.modul-sim.sim-table',compact('sim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modul-sim.sim-create');
    }

    public static function checkPriv($id_sim,$id_role)
    {
        dd(Auth::user()->id_role);
        if (Auth::user()->myrole->name == 'Admin') {
            //for admin
            $simDatabase = Simrole::where([
               
                'id_sim' => $id_sim,
                
                
            ])->first();
            
        } else {
            $simDatabase = Simrole::where([
               
                'id_sim' => $id_sim,
                'id_role' => Auth::user()->id_role //3

            ])->first();
        }
        // dd($dbDatabase->permission);
       
        return $simDatabase;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sim = Auth::user()->simku();
        $sim->create($request->except('_token'));
        return redirect(route('sim.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    

    public function show($id)
    {
        $nama_sim = Menu::find($id);
        $databases = Database::where('id_sim',$id)->orderBy('created_at', 'desc')->paginate(5);
        $dataProfiles = Menu::where('id_category', 1)->get();
        $dataTransactions = Menu::where('id_category', 2)->get();
        $dataWarehouses = Menu::where('id_category', 3)->get();
        $dataMarts = Menu::where('id_category', 4)->get();
        return view('admin.modul-database.database-table',compact('databases','nama_sim','dataProfiles','dataTransactions','dataWarehouses','dataMarts'));

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
        //
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
