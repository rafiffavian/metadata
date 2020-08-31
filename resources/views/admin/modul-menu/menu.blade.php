@extends('layouts.master')

@section('content')
<form class="form-horizontal" method="post" action="{{route('menu.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Create Table</legend>

        <!-- Text input-->
        {{-- <input type="hidden" name="_method" value="put"> --}}
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nama Table</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
            </div>
        </div>
        <label class="col-md-4 control-label" for="textinput">Category</label>  
            <div class="col-md-4">
                <select name="id_category" class="form-control input-md">
                    <option value="1">Data Profile</option>
                    <option value="2">Data Layanan Transaksi</option>
                    <option value="3">Data WareHouse</option>
                    <option value="4">Data Mart</option>
                </select>
            </div>
        
       
        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
