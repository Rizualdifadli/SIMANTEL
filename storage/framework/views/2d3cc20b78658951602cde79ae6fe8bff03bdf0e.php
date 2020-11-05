

<?php $__env->startSection('title' , 'Status Perizinan Tanah'); ?>

<?php $__env->startSection("container"); ?>
<script src="js/tower_kecamatan.js"></script>
<link rel="stylesheet" href="css/tower_kecamatan.css">
<h2 class="text-center">Detil Tagihan</h2>
<table class="table table-bordered col-md-12" id="search">
  <thead class="thead-dark" >
      <th scope="col">TOWER</th>
      <th scope="col">IZIN TOWER</th>
      <th scope="col">TENGGAT</th>
      <th scope="col">TAGIHAN</th>
    </thead>

  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <td><?php echo e($x->tower_id); ?></td>
      <td><?php echo e($x->izin_tower); ?></td>
      <td><?php echo e($x->due_date); ?></td>
      <td><?php echo e($x->tagihan); ?><p>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\SIMANTEL\resources\views//tagihanall.blade.php ENDPATH**/ ?>