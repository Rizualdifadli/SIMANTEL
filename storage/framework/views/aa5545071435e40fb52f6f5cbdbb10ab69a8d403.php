

<?php $__env->startSection('title' , 'MERSAM ADMIN'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="post" action="/edit/<?php echo e($x->tower_id); ?>">
<?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->tower_id); ?>">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">DESA</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo e($x->desa); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KOORDINAT</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->koordinat); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETINGGIAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->ketinggian_meter); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PEMILIK TANAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->pemilik_tanah); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">IZIN TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->izin_tower); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">LISTRIK</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->listrik); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAGAR TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->pagar_tower); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PAPAN NAMA TOWER</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->papan_nama); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->petugas); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">HP PETUGAS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->hp_petugas); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SHELTER DAN GENSET</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($x->shelter_genset); ?>">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views/edit.blade.php ENDPATH**/ ?>