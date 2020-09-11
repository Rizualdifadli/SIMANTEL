

<?php $__env->startSection('title' , 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/edit.css">
<div class="jumbotron">
<h3 class="text-center">FORM UBAH DATA TOWER KECAMATAN</h3>
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="form-group col-md-3">
    <label for="exampleFormControlFile1"> file input</label>
    <img src=" <?php echo e(asset( 'storage/'. $x->gambar)); ?>" alt="" height="123px">
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//gambar.blade.php ENDPATH**/ ?>