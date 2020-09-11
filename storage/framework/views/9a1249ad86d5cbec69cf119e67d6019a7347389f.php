

<?php $__env->startSection('title' , 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/gambar.css">
<div class="jumbotron">
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3 class="text-center">FOTO TOWER <?php echo e($x->tower_id); ?></h3>
    <?php echo csrf_field(); ?>
    
  <div class="form-group rounded mx-auto d-block">
    <img src=" <?php echo e(asset( 'storage/'. $x->gambar)); ?>" class="rounded mx-auto d-block" alt="foto_tower">
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis perferendis vitae dolor saepe unde suscipit ex eius obcaecati animi quam labore quas eos soluta, veritatis rerum quo in odio vero!</h3>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views//foto.blade.php ENDPATH**/ ?>