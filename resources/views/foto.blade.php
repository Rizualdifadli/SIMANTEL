@extends ('layouts.app')

@section('title' , 'Form Edit')

@section('content')
<link rel="stylesheet" href="/css/gambar.css">
<div class="jumbotron">
@foreach($data as $x)
<h3 class="text-center">FOTO TOWER {{$x->tower_id}}</h3>
    @csrf
    
  <div class="form-group rounded mx-auto d-block">
    <img src=" {{asset( 'storage/'. $x->gambar) }}" class="rounded mx-auto d-block" alt="foto_tower">
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis vitae dolor saepe unde suscipit ex eius obcaecati animi quam labore quas eos soluta, veritatis rerum quo in odio vero!</h3>
  </div>
  @endforeach

@endsection