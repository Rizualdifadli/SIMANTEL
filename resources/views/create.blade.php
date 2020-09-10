@extends ('layouts.app')

@section('title' , 'Form Tambah Data')

@section('content')
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM TAMBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/kecamatanmersam_admin" enctype="multipart/form-data">
@csrf

  <div class="form-group col-md-12 ">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tower_id" required>
  </div>

  <div class="col-md-6">
      <label for="validationCustom04">KODE KECAMATAN</label>
      <select class="custom-select" id="validationCustom04" required name="kode_kecamatan">
      <option selected disabled value="">SILAHKAN PILIH KODE KECAMATAN</option>
        <option>150401 ( KECAMATAN MERSAM)</option>
        <option>150402 ( KECAMATAN MUARA TEMBESI)</option>
        <option>150403 ( KECAMATAN MUARA BULIAN)</option>
        <option>150404 ( KECAMATAN BATIN XXIV)</option>
        <option>150405 ( KECAMATAN PEMAYUNG)</option>
        <option>150406 ( KECAMATAN MARO SEBO ULU)</option>
        <option>150407 ( KECAMATAN BAJUBANG)</option>
        <option>150408 ( KECAMATAN MARO SEBO ILIR)</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
<div class="form-group col-md-12">
    <label for="exampleInputPassword1" >DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="desa" >
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="koordinat">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ketinggian_meter">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemilik_tanah">
  </div>
  <div class="form-group col-md-2">
    <select class="custom-select" id="validationCustom04" name="izin_tower">
      <option selected disabled value=""> IZIN TOWER</option>
        <option>Yes</option>
        <option>No</option>
      </select>
  </div>
  <div class="form-group col-md-2">
  <select class="custom-select" id="validationCustom04" name="listrik">
      <option selected disabled value="">LISTRIK</option>
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <select class="custom-select" id="validationCustom04" name="pagar_tower">
      <option selected disabled value="">PAGAR TOWER</option>
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <select class="custom-select" id="validationCustom04" name="papan_nama">
      <option selected disabled value="">PAPAN NAMA TOWER</option>
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="petugas">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hp_petugas">
  </div>
  <div class="form-group col-md-2">
  <select class="custom-select" id="validationCustom04" name="shelter_genset">
      <option selected disabled value="">SHELTER DAN GENSET</option>
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1"> file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
 <div class="col-md-12"> <button type="submit" class="btn btn-primary col-sm-12">Submit</button></div>
</form>
</div>

@endsection