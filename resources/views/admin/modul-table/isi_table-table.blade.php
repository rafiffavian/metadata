@php use \App\Http\Controllers\Admin\TableController ; @endphp
@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
       
        <div class="box-body">
            <div class="row">
                <div class="col-sm-7">
                    <h3>Kelola Table Database {{$nama_database->name}}</h3>
                </div> 
                <div class="col-sm-5">
                    
                </div>   
            </div> <br>   
            {{-- <h3>Kelola Database {{$nama_database->name}}</h3> --}}
            <div class="row">
                <div class="col-sm-7">
                    <p>Sistem Informasi P3K merupakan sistem informasi yang menyediakan layanan database PNS, refrensi, dan sapk yang didalamnya, terdapat file metadata yang dapat di download dan digunakan</p>
                    <a class="btn btn-primary" href="{{route('table.create.data',$nama_database->id)}}">Tambah Table</a>
                </div>
                <div class="col-sm-5">
                    <form action="{{route('post_index_table',$nama_database->id)}}" method="post">
                        @csrf             
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            
                            <input type="text" class="form-control" placeholder="Search" id="nama" aria-describedby="namaHelp" value="" name="text_search_table">
                        </div>
                        <button type="submit" class="btn btn-primary" style="float:right; width:25%;">Search</button>                              
                    </form>
                </div>
            </div><br>    
          <div class="row">
            <div class="col-md-12">
            
                <div class="row mt-2">
                    
                    <table style="width: 500px; margin-left:250px;">
                        <thead>
                            <tr>
                                <th>Nama Table</th>
                                <th>Action</th>
                            </tr>        
                        </thead>   
                        <tbody>
                            @foreach($tables as $table) 
                            @if($table)   
                            <tr>
                                <td>
                                    <small><a href="{{route('table.show',$table->id)}}">{{$table->name}}</a></small><br>
                                </td>
                                <td>
                                    <small><a style="font-size: 80%" href="#">Edit</a>&nbsp;<a href=""></a></small>||
                                     <small><a style="font-size: 80%" href="{{route('download.index',$table->id)}}">Upload File</a>&nbsp;<a href=""></a></small>
                                </td>
                            </tr>
                            @endif  
                            @endforeach 
                        </tbody> 
                    </table>    
                   
                </div>
                <div class="mt-3">
                    {{$tables->links()}}
                </div>
                {{-- <a class="btn btn-success" href="{{route('database.show',$nama_database->id)}}">Refresh</a><br> --}}
                <a href="{{route('table.back',$nama_database->id_sim)}}">
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