@extends ('layouts.app')

@section('title' , 'MERSAM ADMIN')

@section('content')
<script src="js/kecamatanmersam_admin.js"></script>
<link rel="stylesheet" href="css/kecamatan_1.css">
<table class="table table-bordered" id="search">
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
    @foreach ($data as $x)
    <tr>
        <td>{{$x->tower_id}} </td>
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
    <td>
          <a href="{{$x->tower_id}}/edit" class="badge badge-success"><i class="far fa-edit"></i></a>
        </td>
        <td>
        <a href="#" class="badge badge-danger"><i class="fas fa-trash"></i></a>
        </td>
    @endforeach
  </tbody>
</table>
@endsection
