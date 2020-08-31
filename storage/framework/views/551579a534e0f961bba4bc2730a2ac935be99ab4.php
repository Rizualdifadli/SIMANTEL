<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div></div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fa fa-angle-double-right" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>SIMANTEL</header>
      <ul>
        <li><a href="<?php echo e(url('/')); ?>"><i class="fas fa-qrcode"></i>Dashboard</a></li>
        <li><a href="<?php echo e(url('/simantel')); ?>"><i class="fas fa-calendar-week"></i>Perusahaan</a></li>
        <li><a href="#"><i class="far fa-question-circle"></i>Pemilik Tower</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
        <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
      </ul>
    </div>
<section >
<div class="nav">
  <div class="login">
  <a class="btn btn-primary" href="<?php echo e(route('admin.users.index')); ?>" role="button">LOGIN</a>
  </div>
  
</div>
  <?php echo $__env->yieldContent('container'); ?>
</section>  
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/search.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tower_kecamatan.js"></script> 
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\SIMANTEL\resources\views/layout/main.blade.php ENDPATH**/ ?>