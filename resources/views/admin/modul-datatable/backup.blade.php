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
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Attribute</th>
                    <th>Definisi</th>
                    <th>Standard Acuan</th>
                    <th>Sinonim</th>
                    <th>Kodifikasi</th>
                    <th>Jenis Data</th>
                    <th>Keterangan</th>
                    <th>Jenis Table</th>
                    <th>Relasi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
             
                  <tr>
                    <td>ID</td>
                    <td>Not Null</td>
                    <td></td>
                    <td>id</td>
                    <td></td>
                    <td>VARCHAR2(32)</td>
                    <td>ID yang otomatis ter-generate saat data dibuat</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td></td>
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
                  <tr>
                    <td>PNS_ORANG_ID</td>
                    <td>Null</td>
                    <td></td>
                    <td>pnsId</td>
                    <td></td>
                    <td>VARCHAR2(32)</td>
                    <td>ID dari PNS</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td>n to 1</td>
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
                  <tr>
                    <td>KEDUDUKAN_HUKUM_ID</td>
                    <td>Null</td>
                    <td></td>
                    <td>kedudukanHukumId</td>
                    <td></td>
                    <td>VARCHAR2(2)</td>
                    <td>ID dari Kedudukan Hukum (lihat di s.id/TABREFBKN)</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td>n to 1</td>
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
                  <tr>
                    <td>KEDUDUKAN_HUKUM_LAMA</td>
                    <td>Null</td>
                    <td></td>
                    <td>kedudukanHukumLama</td>
                    <td></td>
                    <td>VARCHAR2(2)</td>
                    <td>ID dari Kedudukan Hukum sebelumnya (lihat di s.id/TABREFBKN)</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td></td>
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
            
                  <tr>
                    <td>TMT_KEDUDUKAN_HUKUM</td>
                    <td>Null</td>
                    <td></td>
                    <td>tmtKedudukanHukum</td>
                    <td></td>
                    <td>DATE</td>
                    <td>Tanggal TMT Kedudukan Hukum</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td></td>
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
                  <tr>
                    <td>NCSISTIME</td>
                    <td>Null</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>TIMESTAMP(6)</td>
                    <td>Waktu realtime ter-create nya data</td>
                    <td>META DATA TABEL RW_KEDUDUKAN_HUKUM</td>
                    <td></td>
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
