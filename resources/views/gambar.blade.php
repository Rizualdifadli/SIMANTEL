@extends ('layouts.app')

@section('title' , 'Form Edit')

@section('content')
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
    @csrf
    @foreach($data as $x)
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1"> file input</label>
    <img src=" {{asset( 'storage/'. $x->gambar) }}" alt="" height="123px">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  @endforeach

@endsection