<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
    
            $data_pasien = \App\DataPasien::where('nama_pasien','LIKE','%'.$request->cari.'%')->get();
        }else{
        $data_pasien = \App\DataPasien::all();
        
       
        $kode = \App\DataPasien::select('data_pasien')->max('id');
    	$addNol = '';
    	$kode = str_replace("PAS", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "PAS".$addNol.$incrementKode;
        
    }
        return view('data_pasien.index',['data_pasien'=> $data_pasien,'id'=> $kodeBaru]);
    }
    public function create(Request $request)
    {
        \App\DataPasien::create($request->all());
        
        return redirect('/data_pasien')->with('sukses','Data Berhasil Di Masukan');
        
            
    }
    public function edit($id)
    {
        $data_pasien = \App\DataPasien::find($id);
       return view('data_pasien/edit',['data_pasien'=>$data_pasien]);
    }
    public function update(Request $request,$id)
    {  
        $data_pasien = \App\DataPasien::find($id);
        $data_pasien ->update($request->all());
        return redirect('/data_pasien')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data_pasien = \App\DataPasien::find($id);
        $data_pasien ->delete($id);
        return redirect('/data_pasien')->with('sukses','Data Berhasil Di Hapus');
    }
    public function dokter()
    {
        return $this->belongsToMany(DataDokter::class);
    }
}