<?php

namespace App;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tower extends Model
{
    protected $fillable= ['tower_id','kode_kecamatan','desa','koordinat', 'ketinggian_meter','pemilik_tanah','izin_tower','listrik','pagar_tower','papan_nama','petugas','hp_petugas','shelter_genset','gambar'];
    use SoftDeletes;
}
