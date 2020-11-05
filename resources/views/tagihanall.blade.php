@extends ('layout.main')

@section('title' , 'Status Perizinan Tanah')

@section("container")
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

  @foreach ($data as $x)
  <tr>
      <td>{{$x->tower_id}}</td>
      <td>{{$x->izin_tower}}</td>
      <td>{{$x->due_date}}</td>
      <td>{{$x->tagihan}}<p>
  </tr>
  @endforeach
@endsection