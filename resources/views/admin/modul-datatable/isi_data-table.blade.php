@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
        <a href="{{route('database.show',$nama_table->id_database)}}">
                 <img src="{{asset('img/back.png')}}" style="width: 30px; height: 30px;margin-top: 20px;" alt="">     
        </a>   <br><br>
          <h3 style="text-align: center" class="box-title">{{$nama_table->name}}</h3><br><br>
          <a class="btn btn-primary" href="{{route('isi.create',$nama_table->id)}}">Tambah</a>
          <a class="btn btn-default" href="{{route('isi.download',$nama_table->id)}}">Download File</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table width="50%" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th width="50px">Attribute</th>
                    <th>Definisi</th>
                    {{-- <th>Standard Acuan</th> --}}
                    <th>Klasifikasi</th>
                    <th>Sinonim</th>
                    <th>Kodifikasi</th>
                    {{-- <th>Jenis Data</th> --}}
                    <th>Keterangan</th>
                    {{-- <th>Jenis Table</th> --}}
                    {{-- <th>Relasi</th> --}}
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($isiData as $data)
                  <tr>
                    <td width="5px">{{$data->attribute}}</td>
                    <td>{{$data->definisi}}</td>
                    {{-- <td>{{$data->strandard_acuan}}</td> --}}
                    <td>{{$data->strandard_acuan}}</td>
                    <td>{{$data->sinonim}}</td>
                    <td>{{$data->kodifikasi}}</td>
                    {{-- <td>{{$data->jenis_data}}</td> --}}
                    <td>{{$data->keterangan}}</td>
                    {{-- <td>{{$data->jenis_table}}</td> --}}
                    {{-- <td>{{$data->relasi}}</td> --}}
                    <td>
                        <a href=""><i class="fa fa-eye"></i></a>
                        <a href=""><i class="fa fa-pencil"></i></a>
                        <form method="post" action=""> 
                      @csrf
                        <input type="hidden" name="_method" value="delete">   
                        <button type="submit"><i class="fa fa-trash"></i></button>
                    </form>    
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
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
