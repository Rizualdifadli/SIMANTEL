

<?php $__env->startSection('title' , 'Form Tambah Data'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM TAMBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/kecamatanmersam_admin">
<?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LISTRIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAGAR TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAPAN NAMA TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SHELTER DAN GENSET</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//create.blade.php ENDPATH**/ ?>