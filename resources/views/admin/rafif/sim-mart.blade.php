@php use \App\Http\Controllers\Admin\SimController ; @endphp
@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      
       
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                {{-- {{Auth::user()->id_role}} --}}
                <h3>Kelola SIM</h3>
               
                   <div class="row mt-2">
                        <ul>
                            <li style="margin:20px 0;">
                                <h2><a href="{{route('sim.show',1)}}">Dashboard Jabatan</a></h2>
                                {{-- <a href="{{route('sim.show',$sims->id)}}">{{$sims->name}}</a><br> --}}
                                {{-- <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                <small><a href="/edit-matkul/sis-infor-akun">Delete</a>&nbsp;<a href=""></a></small> --}}
                            </li>
                        </ul>
                    </div>   
                    <div class="row mt-2">
                        <ul>
                            <li style="margin:20px 0;">
                                <h2><a href="{{route('sim.show',1)}}">Menkeu</a></h2>
                                {{-- <a href="{{route('sim.show',$sims->id)}}">{{$sims->name}}</a><br> --}}
                                {{-- <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                <small><a href="/edit-matkul/sis-infor-akun">Delete</a>&nbsp;<a href=""></a></small> --}}
                            </li>
                        </ul>
                    </div>
                    <div class="row mt-2">    
                        <ul>
                            <li style="margin:20px 0;">
                                <h2><a href="{{route('sim.show',1)}}">Menpan</a></h2>
                                {{-- <a href="{{route('sim.show',$sims->id)}}">{{$sims->name}}</a><br> --}}
                                {{-- <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                <small><a href="/edit-matkul/sis-infor-akun">Delete</a>&nbsp;<a href=""></a></small> --}}
                            </li>
                        </ul>
                    </div>    
                    <div class="row mt-2">    
                        <ul>
                            <li style="margin:20px 0;">
                                <h2><a href="{{route('sim.show',1)}}">KPK</a></h2>
                                {{-- <a href="{{route('sim.show',$sims->id)}}">{{$sims->name}}</a><br> --}}
                                {{-- <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                <small><a href="/edit-matkul/sis-infor-akun">Delete</a>&nbsp;<a href=""></a></small> --}}
                            </li>
                        </ul>
                    </div>    
                    </h3>
                </div>
                {{-- <div class="mt-3">
                    {{$sim->links()}}
                </div> --}}
                {{-- <a class="btn btn-success" href="{{route('sim.index')}}">Refresh</a>         --}}
               
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection