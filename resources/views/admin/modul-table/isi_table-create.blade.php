@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('table.store.data',$id_database)}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Table</legend>

        <!-- Text input-->
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Table</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
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
