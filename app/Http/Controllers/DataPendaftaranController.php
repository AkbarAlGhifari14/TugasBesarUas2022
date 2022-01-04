<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pendaftaran = \App\DataPendaftaran::where('id_pasien','LIKE','%'.$request->cari.'%')->get();
            $data_pendaftaran = DataPendaftaran::with('datapasien')->paginate(2);
            $data_pendaftaran = DataPendaftaran::with('datadokter')->paginate(2);
            
           
        }else{
        $data_pendaftaran = \App\DataPendaftaran::all();
        $data_pasien = \App\DataPasien::all();
        $data_dokter = \App\DataDokter::all();

    }
        return view('data_pendaftaran.index',['data_pendaftaran'=> $data_pendaftaran,'data_pasien'=> $data_pasien,'data_dokter'=> $data_dokter]);
        
    }
    public function create(Request $request)
    {
        \App\DataPendaftaran::create($request->all());
        
        return redirect('/data_pendaftaran')->with('sukses','Data Berhasil Di Masukan');

            
    }
    public function rekamedia($id)
    {
        $data_pendaftaran = \App\DataPendaftaran::find($id);
     
       return view('data_pendaftaran/rekamedia',['data_pendaftaran'=>$data_pendaftaran]);
       
    }
    public function delete($id)
    {
        $data_pendaftaran = \App\DataPendaftaran::find($id);
        $data_pendaftaran ->delete($id);
        return redirect('/data_pendaftaran')->with('sukses','Data Berhasil Di Hapus');
    }
}
