@extends('layouts.master')

@section('content')



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 style="text-align: center" class="box-title">Table User</h3><br>
          <a class="btn btn-primary" href="{{route('admin.user.create')}}">Tambah</a>

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
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama User</th>
                    <th>Email User</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($admin as $admins)
                  <tr>
                    <td>{{$admins->name}}</td>
                    <td>{{$admins->email}}</td>
                    <td>{{$admins->myrole->name}}</td>
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