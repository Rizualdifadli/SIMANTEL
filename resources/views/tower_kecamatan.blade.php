@extends ('layout.main')

@section('title' , $region->kecamatan)

@section("container")
<script src="js/tower_kecamatan.js"></script>
<link rel="stylesheet" href="css/tower_kecamatan.css">
<h2 class="text-center">{{$region->kecamatan}}</h2>
<table class="table table-bordered col-md-12" id="search">
  <thead class="thead-dark" >
      <th scope="col">TOWER</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">PERUSAHAAN</th>
      <th scope="col">KOORDINAT</th>
      <th scope="col">KETINGGIAN</th>
      <th scope="col">PEMILIK TANAH</th>
      <th scope="col">IZIN TOWER</th>
      <th scope="col">TENGGAT IZIN</th>
      <th scope="col">SHELTER DAN GENSET</th>
      <th scope="col">LISTRIK</th>
      <th scope="col">PAGAR TOWER</th>
      <th scope="col">PAPAN NAMA TOWER</th>
      <th scope="col">PETUGAS</th>
      <th scope="col">HP PETUGAS</th>
    </thead>
  
  @foreach ($data as $x)
  <tr>
      <td>{{$x->tower_id}}</td>
      <td>{{$x->desa}}</td>
      <td>{{$x->pemilik_tower}}</td>
      <td>{{$x->koordinat}}<p><a href="{{$x->tower_id}}/foto">lihat gambar</a></p></td>
      <td>{{$x->ketinggian_meter}}</td>
      <td>{{$x->pemilik_tanah}}</td>
      <td>{{$x->izin_tower}}</td>  
      <td>{{$x->tenggat_izin}}
      @if ($x->diff < 31 and $x->diff!=0)
         <p class="text-warning">Izin sudah mau habis!</p>
      @endif
      </td>  
      <td>{{$x->shelter_genset}}</td>  
      <td>{{$x->listrik}}</td>
      <td>{{$x->pagar_tower}}</td>
      <td>{{$x->papan_nama}}</td>
      <td>{{$x->petugas}}</td>
      <td>{{$x->hp_petugas}}</td>
  </tr>
  @endforeach
@endsection
