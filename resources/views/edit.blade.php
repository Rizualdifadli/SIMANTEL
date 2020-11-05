@extends ('layouts.app')

@section('title' , 'Form Edit')

@section('content')
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/edit" enctype="multipart/form-data">
    @csrf
    @foreach($data as $x)
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->tower_id}}" name="tower_id">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">KODE KECAMATAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->kode_kecamatan}}" name="kode_kecamatan">
  </div>
<div class="form-group col-md-12">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="{{$x->desa}}" name="desa">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$x->koordinat}}" name="koordinat">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ketinggian_meter"  value="{{$x->ketinggian_meter}}" >
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemilik_tanah" value="{{$x->pemilik_tanah}}">
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="izin_tower" value="{{$x->izin_tower}}">
      <label for="exampleInputPassword1">TENGGAT IZIN</label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tenggat_izin" value="{{$x->tenggat_izin}}">
      <label for="exampleInputPassword1">BILL UNPAID</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bill" value="{{$x->bill}}">
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">LISTRIK</label>
  <select class="custom-select" id="validationCustom04" name="listrik" value="{{$x->listrik}}" >
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">PAGAR TOWER</label>
  <select class="custom-select" id="validationCustom04" name="pagar_tower" value="{{$x->pagar_tower}}">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">PAPAN NAMA TOWER</label>
  <select class="custom-select" id="validationCustom04" name="papan_nama" value="{{$x->papan_nama}}">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="petugas" value="{{$x->petugas}}"  >
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hp_petugas" value="{{$x->hp_petugas}}">
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">SHELTER DAN GENSET</label>
  <select class="custom-select" id="validationCustom04" name="shelter_genset" value="{{$x->shelter_genset}}">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1"> file input</label>
    <img src=" {{asset( 'storage/'. $x->gambar) }}" alt="" height="123px">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  @endforeach
  <div class="col-md-12"><button type="submit" class="btn btn-primary col-sm-12">Submit</button></div>
</form>
</div>

@endsection
