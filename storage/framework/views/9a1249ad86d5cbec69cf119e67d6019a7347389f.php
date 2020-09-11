

<?php $__env->startSection('title' , 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/gambar.css">
<div class="jumbotron">
<h3 class="text-center">FOTO TOWER KECAMATAN</h3>
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="form-group rounded mx-auto d-block">
    <img src=" <?php echo e(asset( 'storage/'. $x->gambar)); ?>" class="rounded mx-auto d-block" alt="foto_tower">
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//foto.blade.php ENDPATH**/ ?>