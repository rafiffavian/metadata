@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('isi.store',$id_table)}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Datatable</legend>

        <!-- Text input-->
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Attribute</label>  
            <div class="col-md-4">
                <input id="textinput" name="attribute" type="text" placeholder="Attribute" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Definisi</label>  
            <div class="col-md-4">
                <input id="textinput" name="definisi" type="text" placeholder="Definisi" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Standard Acuan</label>  
            <div class="col-md-4">
                <input id="textinput" name="standard_acuan" type="text" placeholder="Standard Acuan" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Sinonim</label>  
            <div class="col-md-4">
                <input id="textinput" name="sinonim" type="text" placeholder="Sinonim" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Kodifikasi</label>  
            <div class="col-md-4">
                <input id="textinput" name="kodifikasi" type="text" placeholder="Kodifikasi" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Data</label>  
            <div class="col-md-4">
                <input id="textinput" name="jenis_data" type="text" placeholder="Jenis Data" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Keterangan</label>  
            <div class="col-md-4">
                <textarea name="keterangan" placeholder="Keterangan" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Jenis Tabel</label>  
            <div class="col-md-4">
             <input id="textinput" name="jenis_table" type="text" placeholder="Jenis Tabel" class="form-control input-md">
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Relasi</label>  
            <div class="col-md-4">
                <input id="textinput" name="relasi" type="text" placeholder="Relasi" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
       <br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
