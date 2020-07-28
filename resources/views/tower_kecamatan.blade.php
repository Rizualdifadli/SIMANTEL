@extends ('layout.main')

@section('title' , $region->kecamatan)

@section("container")
<link rel="stylesheet" href="css/kecamatan_1.css">
<h4>{{$region->kecamatan}}</h4>
<hr>
<table class="table">
  <thead class="thead-dark">
      <th scope="col">TOWER</th>
      <th scope="col">DESA</th>
      <th scope="col">KOORDINAT</th>
      <th scope="col">KETINGGIAN</th>
      <th scope="col">PEMILIK TANAH</th>
      
    </thead>

  @foreach ($data as $x)
  <tr>
      <td>{{$x->tower_id}}</td>
      <td>{{$x->desa}}</td>
      <td>{{$x->koordinat}}</td>
      <td>{{$x->ketinggian_meter}}</td>
      <td>{{$x->pemilik_tanah}}</td>
  </tr>
  @endforeach

@endsection

