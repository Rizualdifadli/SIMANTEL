



<?php $__env->startSection('title' , 'SIMANTEL'); ?>

<?php $__env->startSection('container'); ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="css/simantel.css">
<div class="row text-white baris-1">
    <?php $__currentLoopData = $region; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card bg-info" style="width: 18rem;">
     <div class="card-body">
       <div class="card-body-icon"><i class="fas fa-broadcast-tower"></i></div>
      <h5 class="card-title"><?php echo e($r->kecamatan); ?></h5>
      <div class="display-4"><?php echo e($r->jumlah_tower); ?></div>
      <a href="<?php echo e(url('tower_kecamatan?kode_kecamatan='.$r->kode_kecamatan)); ?>"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></p></i></a>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/simantel.blade.php ENDPATH**/ ?>