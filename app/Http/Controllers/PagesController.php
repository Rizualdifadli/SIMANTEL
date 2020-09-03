<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use DB;

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
        $tower = DB::table('tower')->get();
		return view('tower_kecamatan', compact('region','data','provider','tower'));
	}
	public function kecamatanmersam_admin(Request $r){

    if(Gate::denies('delete-users')){
        return redirect(route('admin.users.index'));
      }
    $data=DB::table('tower')
    ->get();
    return view ('kecamatanmersam_admin',compact('data'));
}
    // guest
    public function kecamatan_mersam(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150401')
        ->get();
        return view ('kecamatan_mersam',compact('data'));
    }
    public function kecamatan_tembesi(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150402')
        ->get();
        return view ('kecamatan_tembesi',compact('data'));
    }
    public function kecamatan_muarabulian(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150403')
        ->get();
        return view ('kecamatan_muarabulian',compact('data'));
    }
    public function kecamatan_batinxxiv(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150404')
        ->get();
        return view('kecamatan_batinxxiv',compact('data'));
    }
    public function kecamatan_pemayung(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150405')
        ->get();
        return view ('kecamatan_pemayung',compact('data'));
    }
    public function kecamatan_maroseboulu(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150406')
        ->get();
        return view ('kecamatan_maroseboulu',compact('data'));
    }
    public function kecamatan_maroseboilir(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150408')
        ->get();
        return view ('kecamatan_maroseboilir',compact('data'));
    }
    public function kecamatan_bajubang(Request $data){
        $data=DB::table('tower')
        ->where('kode_kecamatan','150407')
        ->get();
        return view ('kecamatan_bajubang',compact('data'));
    }
    // akhir Guest

    // admin
    // public function kecamatanmersam_admin(){
    //     return view ('ADMIN/kecamatanmersam_admin');
    // }
    public function kecamatanrtembesi_admin(){
        return view ('ADMIN/kecamatantembesi_admin');
    }
    // akhir admin
    public function edit(Request $tower){
        return view('edit', compact('tower'));
    }
}
