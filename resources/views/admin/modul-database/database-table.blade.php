@php use \App\Http\Controllers\Admin\DatabaseController ; @endphp
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
                <div class="row">
                    <div class="col-sm-7">
                        <h3>Kelola Profile P3K</h3>
                    </div> 
                    <div class="col-sm-5">
                        
                    </div>   
                </div> <br>   
                {{-- <h3>Kelola Database {{$nama_database->name}}</h3> --}}
                <div class="row">
                    <div class="col-sm-7">
                        <p>Sistem Informasi P3K merupakan sistem informasi yang menyediakan layanan database PNS, refrensi, dan sapk yang didalamnya, terdapat file metadata yang dapat di download dan digunakan</p>
                        <a class="btn btn-primary" href="{{route('db.create.data',$nama_sim->id)}}">Tambah Database</a>    
                    </div>
                    <div class="col-sm-5">
                        <form action="{{route('post_index_db',$nama_sim->id)}}" method="post">
                            @csrf             
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                
                                <input type="text" class="form-control" id="nama" placeholder="Search" aria-describedby="namaHelp" value="" name="text_search_db">
                            </div>
                            <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Search</button>                              
                        </form>
                    </div>
                </div><br>        
                
                <div class="row mt-2">

                        <table style="width: 500px; margin-left:250px;">
                            <thead>
                                <tr>
                                    <th>Nama Database Profile P3k</th>
                                    <th>Action</th>
                                </tr>        
                            </thead>    
                            <tbody>
                                @foreach($databases as $database) 
                                @if($databases)   
                               <tr>
                                    <td>
                                            <a href="{{route('database.show',$database->id)}}">{{$database->name}}</a>
                                    </td>
                                    <td>
                                        <small><a href="/edit-matkul/sis-infor-akun">Edit</a>&nbsp;<a href=""></a></small>
                                    </td>
                                </tr>     
                               @endif 
                               @endforeach 
                            </tbody>
                        </table>
           
                </div>
                <div class="mt-3">
                    {{$databases->links()}}
                </div>
                {{-- <a class="btn btn-success" href="{{route('sim.show',$nama_database->id)}}">Refresh</a>    <br>     --}}
                <a href="{{route('sim.index')}}">
                 <img src="{{asset('img/back.png')}}" style="width: 30px; height: 30px;margin-top: 20px;" alt="">     
                </a>   
               
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