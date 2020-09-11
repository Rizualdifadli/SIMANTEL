@extends ('layouts.app')

@section('title' , 'Form Edit')

@section('content')
<link rel="stylesheet" href="/css/gambar.css">
<div class="jumbotron">
<h3 class="text-center">FOTO TOWER KECAMATAN</h3>
    @csrf
    @foreach($data as $x)
  <div class="form-group rounded mx-auto d-block">
    <img src=" {{asset( 'storage/'. $x->gambar) }}" class="rounded mx-auto d-block" alt="foto_tower">
  </div>
  @endforeach

@endsection