<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_pegawai = \App\Pegawai::where('nama_pegawai','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pegawai = \App\Pegawai::all();
        }
        return view('pegawai.index', ['data_pegawai' => $data_pegawai]);
    }
    public function create(Request $request){
        \App\Pegawai::create($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil ditambahkan'); 
    }
    public function edit($id){
        $pegawai = \App\Pegawai::find($id);
        return view('pegawai/edit',['pegawai' => $pegawai]);
    }
    public function update(Request $request, $id){
        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diupdate'); 
    }
    public function delete($id){
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai')->with('sukses','Data berhasil dihapus'); 
    }
}
