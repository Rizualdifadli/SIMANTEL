
@extends ('layout.main')


@section('title' , 'SIMANTEL')

@section('container')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="css/simantel.css">
<div class="row col-md-12 text-white baris-1" id="example">
    @foreach($region as $r)
    <div class="card bg-info" style="width: 18rem;top:35px; ">
     <div class="card-body">
       <div class="card-body-icon"><i class="fas fa-broadcast-tower"></i></div>
      <h5 class="card-title">{{$r->kecamatan}}</h5>
      <div class="display-4">{{$r->jumlah_tower}}</div>
      <a href="{{url('tower_kecamatan?kode_kecamatan='.$r->kode_kecamatan)}}"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></p></i></a>
      </div>
    </div>
    @endforeach
    @foreach($globalregion as $g)
    <div class="card bg-info" style="width: 18rem;top:35px; ">
     <div class="card-body">
       <div class="card-body-icon"><i class="fas fa-broadcast-tower"></i></div>
      <h5 class="card-title">Semua Tower</h5>
      <div class="display-4">{{$g->jumlah_tower}}</div>
      <a href="{{url('tower_global')}}"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></p></i></a>
      </div>
    </div>
    @endforeach
</div>
@endsection
