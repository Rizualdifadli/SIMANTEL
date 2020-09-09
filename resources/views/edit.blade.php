@extends ('layouts.app')

@section('title' , 'Form Edit')

@section('content')
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/edit">
    @csrf
    @foreach($data as $x)
  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->tower_id}}" name="tower_id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KODE KECAMATAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->kode_kecamatan}}" name="kode_kecamatan">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="{{$x->desa}}" name="desa">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->koordinat}}" name="koordinat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->ketinggian_meter}}" name="ketinggian_meter">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->pemilik_tanah}}" name="pemilik_tanah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->izin_tower}}" name="izin_tower">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LISTRIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->listrik}}" name="listrik">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAGAR TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->pagar_tower}}" name="pagar_tower">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAPAN NAMA TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->papan_nama}}" name="papan_nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->petugas}}" name="petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->hp_petugas}}" name="hp_petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SHELTER DAN GENSET</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->shelter_genset}}" name="shelter_genset">
  </div>
  @endforeach
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>

@endsection
