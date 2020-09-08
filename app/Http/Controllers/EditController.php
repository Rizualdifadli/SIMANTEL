<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tower $tower)
    {
        return $tower;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        $tower_id=$r->tower_id;
        $data=DB::table('tower')
        ->where('tower_id',$tower_id)
        ->get();
          return view('/edit', compact('data','tower_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tower')
        ->where('tower_id', $request->tower_id)
        ->update([
                    //'tower_id'=>$request->tower_id,
                    'desa'=>$request->desa,
                    'koordinat'=>$request->koordinat,
                    'ketinggian_meter'=>$request->ketinggian_meter,
                    'pemilik_tanah'=>$request->pemilik_tanah,
                    'izin_tower'=>$request->izin_tower,
                    'listrik'=>$request->listrik,
                    'pagar_tower'=>$request->pagar_tower,
                    'papan_nama'=>$request->papan_nama,
                    'petugas'=>$request->petugas,
                    'hp_petugas'=>$request->hp_petugas,
                    'shelter_genset'=>$request->shelter_genset
                ]);
        return redirect('/kecamatanmersam_admin')->with('status','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
