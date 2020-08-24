@extends ('layout.main')

@section('title' , $region->kecamatan)

@section("container")
<script src="js/tower_kecamatan.js"></script>
<link rel="stylesheet" href="css/tower_kecamatan.css">
<h2 class="text-center">{{$region->kecamatan}}</h2>
<table class="table table-bordered col-md-12" id="search">
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

  @foreach ($data as $x)
  <tr>
      <td>{{$x->tower_id}}</td>
      <td>{{$x->desa}} </p></td>
      <td>{{$x->koordinat}}<p><a href="">lihat gambar{{$x->gambar}}</a></td>
      <td>{{$x->ketinggian_meter}}</td>
      <td>{{$x->pemilik_tanah}}</td>
      <td>{{$x->izin_tower}}</td>
      <td>{{$x->listrik}}</td>
      <td>{{$x->pagar_tower}}</td>
      <td>{{$x->papan_nama}}</td>
      <td>{{$x->petugas}}</td>
      <td>{{$x->hp_petugas}}</td>
      <td>{{$x->shelter_genset}}</td>
  </tr>
  @endforeach
@endsection
