@extends ('layouts.app')

@section('title' , 'Form Tambah Data')

@section('content')
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM TAMBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/kecamatanmersam_admin">
@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tower_id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KODE KECAMATAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_kecamatan">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="desa">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="koordinat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ketinggian_meter">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemilik_tanah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="izin_tower" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LISTRIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="listrik">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAGAR TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pagar_tower">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAPAN NAMA TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="papan_nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hp_petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SHELTER DAN GENSET</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="shelter_genset" >
  </div>
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>

@endsection