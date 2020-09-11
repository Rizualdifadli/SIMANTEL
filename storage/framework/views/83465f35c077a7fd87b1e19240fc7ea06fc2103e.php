

<?php $__env->startSection('title' , 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/edit" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->tower_id); ?>" name="tower_id">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">KODE KECAMATAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->kode_kecamatan); ?>" name="kode_kecamatan">
  </div>
<div class="form-group col-md-12">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo e($x->desa); ?>" name="desa">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->koordinat); ?>" name="koordinat">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ketinggian_meter"  value="<?php echo e($x->ketinggian_meter); ?>" >
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pemilik_tanah" value="<?php echo e($x->pemilik_tanah); ?>">
  </div>
  <div class="form-group col-md-2">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <select class="custom-select" id="validationCustom04" name="izin_tower"  value="<?php echo e($x->izin_tower); ?>" >
        <option>Yes</option>
        <option>No</option>
      </select>
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">LISTRIK</label>
  <select class="custom-select" id="validationCustom04" name="listrik" value="<?php echo e($x->listrik); ?>" >
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">PAGAR TOWER</label>
  <select class="custom-select" id="validationCustom04" name="pagar_tower" value="<?php echo e($x->pagar_tower); ?>">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">PAPAN NAMA TOWER</label>
  <select class="custom-select" id="validationCustom04" name="papan_nama" value="<?php echo e($x->papan_nama); ?>">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="petugas" value="<?php echo e($x->petugas); ?>"  >
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="hp_petugas" value="<?php echo e($x->hp_petugas); ?>">
  </div>
  <div class="form-group col-md-2">
  <label selected disabled value="">SHELTER DAN GENSET</label>
  <select class="custom-select" id="validationCustom04" name="shelter_genset" value="<?php echo e($x->shelter_genset); ?>">
        <option>Yes</option>
        <option>No</option>
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1"> file input</label>
    <img src=" <?php echo e(asset( 'storage/'. $x->gambar)); ?>" alt="" height="123px">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-12"><button type="submit" class="btn btn-primary col-sm-12">Submit</button></div>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//edit.blade.php ENDPATH**/ ?>