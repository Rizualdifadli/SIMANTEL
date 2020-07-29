<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/main.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <li><a href="{{url('/simantel')}}"><i class="fas fa-calendar-week"></i>Provider</a></li>
        <li><a href="#"><i class="far fa-question-circle"></i>Pemilik Tower</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
        <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
      </ul>
    </div>
<section>
  <nav>
   <a class="btn btn-primary" href="{{url('/login')}}" role="button">LOGIN</a>
   <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
  @yield('container')
</section>

  </body>
</html>
