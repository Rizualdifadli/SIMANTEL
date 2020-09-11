<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class PagesController extends Controller
{
    public function home(){
        return view ('index');
    }
    public function login(){
        return view ('login');
    }
    public function simantel(){
        //$region = DB::table('region')->get();
        $region = DB::select('select b.kode_kecamatan, b.kecamatan, count(a.tower_id) as jumlah_tower
from tower as a, region as b where a.kode_kecamatan  = b.kode_kecamatan
group by a.kode_kecamatan');
        return view ('simantel',compact('region'));
    }

	public function tower_kecamatan(Request $r){
		$kode_kecamatan = $r->kode_kecamatan;
        $region = DB::table('region')
                    ->where('kode_kecamatan',$kode_kecamatan)->first();
		$data = DB::table('tower')
				->where('kode_kecamatan', $kode_kecamatan)->get();
        $provider = DB::table('provider')->get();
		return view('tower_kecamatan', compact('region','data','provider'));
	}
	public function kecamatanmersam_admin(Request $data){

    
    //return view ('kecamatanmersam_admin',compact('data'));
}
    // guest
    // akhir Guest

    // admin
    // public function kecamatanmersam_admin(){
    //     return view ('ADMIN/kecamatanmersam_admin');
    // }
    public function kecamatanrtembesi_admin(){
      $data=DB::table('tower')
      ->get();
        return view ('ADMIN/kecamatantembesi_admin',compact('data'));
    }
    // akhir admin
    public function gambar(Request $r){
        $tower_id=$r->tower_id;
        $data=DB::table('tower')
        ->where('tower_id',$tower_id)
        ->get();
          return view('/foto', compact('data','tower_id'));
    }

}
