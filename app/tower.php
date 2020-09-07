<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tower extends Model
{
    protected $fillable= ['desa','koordinat', 'ketinggian_meter','pemilik_tanah','izin_tower','listrik','pagar_tower','papan_nama','petugas','hp_petugas','shelter_genset']
}
