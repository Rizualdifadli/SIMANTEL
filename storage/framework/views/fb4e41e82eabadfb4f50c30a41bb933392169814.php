

<?php $__env->startSection('title' , 'Form Tambah Data'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="jumbotron">
<h3 class="text-center">FORM TAMBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/kecamatanmersam_admin">
<?php echo csrf_field(); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tower_id" required>
  </div>

  <div class="">
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
<div class="form-group">
    <label for="exampleInputPassword1" >DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="desa" >
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
  <div class="custom-file col-md-3 mb-3">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="gambar" >
    <label class="custom-file-label" for="validatedCustomFile">Pilih Gambar</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//create.blade.php ENDPATH**/ ?>