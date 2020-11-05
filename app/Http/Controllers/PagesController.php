<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Carbon\Carbon;

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
        $globalregion = DB::select('select b.kode_kecamatan, b.kecamatan, count(a.tower_id) as jumlah_tower
from tower as a, region as b where a.kode_kecamatan  = b.kode_kecamatan');
        return view ('simantel',compact('region','globalregion'));
    }

	public function tower_kecamatan(Request $r){
		$kode_kecamatan = $r->kode_kecamatan;
        $region = DB::table('region')
                    ->where('kode_kecamatan',$kode_kecamatan)->first();
		$data = DB::table('tower')
        ->leftJoin("perusahaan","perusahaan.tower_id","=","tower.tower_id")
        ->select('tower.*','perusahaan.*')
                ->where('kode_kecamatan', $kode_kecamatan)->get();

        $rows = DB::table('tower')->select('tower.tenggat_izin')->get();
        $tenggat = $rows[0]; 
        $diff = Carbon::now()->diff(Carbon::parse($tenggat->tenggat_izin));
        $diff2 = Carbon::parse($tenggat->tenggat_izin)->diff(Carbon::now());

        /**$tenggat = DB::table('tower')
        ->select('tower.tenggat_izin')->get();

        $now = Carbon::now();

        foreach ($tenggat as $tenggat2){
            $deadline = Carbon::parse($tenggat2);
            $diff = $deadline->diffInDays($now);
        }**/
    
		return view('tower_kecamatan', compact('region','data','diff2'));
	}

  public function tower_global(){
		$data = DB::table('tower')
        ->leftJoin("perusahaan","perusahaan.tower_id","=","tower.tower_id")
        ->select('tower.*','perusahaan.*')
				->get();
		return view('tower_global', compact('data'));
	}
	public function kecamatanmersam_admin(Request $data){
        $rows = DB::table('tower')->select('tower.tenggat_izin')->get();
        $tenggat = $rows[0]; 
        $diff = Carbon::now()->diff(Carbon::parse($tenggat->tenggat_izin))->d;
        $diff2 = Carbon::parse($tenggat->tenggat_izin)->diff(Carbon::now())->d;

    return view ('kecamatanmersam_admin',compact('diff2'));
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
    public function gambaradmin(Request $r){
        $tower_id=$r->tower_id;
        $data=DB::table('tower')
        ->where('tower_id',$tower_id)
        ->get();
          return view('/fotoadmin', compact('data','tower_id'));
    }
    /**public function tagihanall(Request $r){
        $data=DB::table('tenggat_izin')
        ->get();
        return view ('/tagihanall',compact('data'));
    }
    public function tagihandash(Request $r){
        $data=DB::table('tenggat_izin')
        ->get();
        return view ('/tagihandash',compact('data'));
    }

    public function tagihandashboard(Request $r){
        
    }**/
}
