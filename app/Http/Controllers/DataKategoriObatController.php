<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKategoriObatController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kategori_obat = \App\DataKategoriObat::where('nama_kategori','LIKE','%'.$request->cari.'%')->get();
        }else{
        $data_kategori_obat = \App\DataKategoriObat::all();
        $kode = \App\DataKategoriObat::select('data_kategori_obat')->max('id');
    	$addNol = '';
    	$kode = str_replace("KTOB", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "KTOB".$addNol.$incrementKode;
    }
        return view('data_kategori_obat.index',['data_kategori_obat'=> $data_kategori_obat,'id'=> $kodeBaru]);
    }
    public function create(Request $request)
    {
        \App\DataKategoriObat::create($request->all());
        return redirect('/data_kategori_obat')->with('sukses','Data Berhasil Di Masukan');
            
    }
    public function delete($id)
    {
        $data_kategori_obat = \App\DataKategoriObat::find($id);
        $data_kategori_obat ->delete($id);
        return redirect('/data_kategori_obat')->with('sukses','Data Berhasil Di Hapus');
    }
}
