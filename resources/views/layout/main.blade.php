<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tower_kecamatan.js"></script> 
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
        <li><a href="{{url('/')}}"><i class="fas fa-qrcode"></i>Dashboard</a></li>
        <li><a href="{{url('/simantel')}}"><i class="fas fa-calendar-week"></i>Perusahaan</a></li>
        <li><a href="#"><i class="far fa-question-circle"></i>Pemilik Tower</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
        <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
      </ul>
    </div>
<section>
<div class="nav">
  <a class="btn btn-primary" href="{{route('admin.users.index')}}" role="button">LOGIN</a>
</div>
  @yield('container')
</section>  
  </body>
</html>
