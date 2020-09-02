


<?php $__env->startSection('title' , 'TOWER ADMIN'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="css/kecamatan_1.css">
<table class="table">
  <thead class="thead-dark" >
      <th scope="col">TOWER</th>
      <th scope="col">DESA</th>
      <th scope="col">KOORDINAT</th>
      <th scope="col">KETINGGIAN</th>
      <th scope="col">PEMILIK TANAH</th>
      <th scope="col">IZIN TOWER</th>
      <th scope="col">LISTRIK</th>
      <th scope="col">PAGAR TOWER</th>
      <th scope="col">PAPAN NAMA TOWER</th>
      <th scope="col">PETUGAS</th>
      <th scope="col">HP PETUGAS</th>
      <th scope="col">SHELTER DAN GENSET</th>
    </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($x->tower_id); ?></td>
        <td><?php echo e($x->desa); ?> </p></td>
        <td><?php echo e($x->koordinat); ?><p><a href="">lihat gambar<?php echo e($x->gambar); ?></a></td>
        <td><?php echo e($x->ketinggian_meter); ?></td>
        <td><?php echo e($x->pemilik_tanah); ?></td>
        <td><?php echo e($x->izin_tower); ?></td>
        <td><?php echo e($x->listrik); ?></td>
        <td><?php echo e($x->pagar_tower); ?></td>
        <td><?php echo e($x->papan_nama); ?></td>
        <td><?php echo e($x->petugas); ?></td>
        <td><?php echo e($x->hp_petugas); ?></td>
        <td><?php echo e($x->shelter_genset); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <td>
          <a href="#" class="badge badge-success"><i class="fas fa-edit"></i></a>
        </td>
      <td>
        <a href="#" class="badge badge-danger"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\GitHub\mantel\SIMANTEL\resources\views/kecamatanmersam_admin.blade.php ENDPATH**/ ?>