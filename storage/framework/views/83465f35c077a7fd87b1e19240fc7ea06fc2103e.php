

<?php $__env->startSection('title' , 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
<form method="post" action="/edit">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->tower_id); ?>" name="tower_id">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo e($x->desa); ?>" name="desa">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->koordinat); ?>" name="koordinat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->ketinggian_meter); ?>" name="ketinggian_meter">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->pemilik_tanah); ?>" name="pemilik_tanah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->izin_tower); ?>" name="izin_tower">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LISTRIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->listrik); ?>" name="listrik">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAGAR TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->pagar_tower); ?>" name="pagar_tower">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAPAN NAMA TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->papan_nama); ?>" name="papan_nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->petugas); ?>" name="petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->hp_petugas); ?>" name="hp_petugas">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SHELTER DAN GENSET</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->shelter_genset); ?>" name="shelter_genset">
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//edit.blade.php ENDPATH**/ ?>