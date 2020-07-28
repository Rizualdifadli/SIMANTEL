

<?php $__env->startSection('title' , $region->kecamatan); ?>

<?php $__env->startSection("container"); ?>
<link rel="stylesheet" href="css/kecamatan_1.css">
<h4><?php echo e($region->kecamatan); ?></h4>
<hr>
<table class="table">
  <thead class="thead-dark">
      <th scope="col">TOWER</th>
      <th scope="col">DESA</th>
      <th scope="col">KOORDINAT</th>
      <th scope="col">KETINGGIAN</th>
      <th scope="col">PEMILIK TANAH</th>
    </thead>

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <td><?php echo e($x->tower_id); ?></td>
      <td><?php echo e($x->desa); ?></td>
      <td><?php echo e($x->koordinat); ?></td>
      <td><?php echo e($x->ketinggian_meter); ?></td>
      <td><?php echo e($x->pemilik_tanah); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/tower_kecamatan.blade.php ENDPATH**/ ?>