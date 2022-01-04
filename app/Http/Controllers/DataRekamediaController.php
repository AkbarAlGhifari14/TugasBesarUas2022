<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRekamediaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_rekamedia = \App\DataRekamedia::where('nama_pasien','LIKE','%'.$request->cari.'%')->get();
            $data_rekamedia = DataRekamedia::with('dataobat')->paginate(2);
            $data_rekamedia = DataRekamedia::with('datadokter')->paginate(2);
        }else{
        $data_rekamedia = \App\DataRekamedia::all();
        $data_dokter = \App\DataDokter::all();
        
    }
        return view('data_rekamedia.index',['data_rekamedia'=> $data_rekamedia,'data_dokter'=> $data_dokter]);
    }
    public function create(Request $request)
    {
        \App\DataRekamedia::create($request->all());
        return redirect('/data_rekamedia')->with('sukses','Data Berhasil Di Masukan');
            
    }
    public function rekamedia($id)
    {
        
        $data_rekamedia = \App\DataPendaftaran::find($id);
       return view('data_rekamedia/rekamedia',['data_rekamedia'=>$data_rekamedia]);
       
    }
    public function resep($id)
    {
       
        $data_resep = \App\DataRekamedia::find($id);
        $data_obat = \App\DataObat::all();
       
       return view('data_resep/resep',['data_resep'=>$data_resep,'data_obat'=> $data_obat]);
       
    }
    public function delete($id)
    {
        $data_rekamedia = \App\DataRekamedia::find($id);
        $data_rekamedia ->delete($id);
        return redirect('/data_rekamedia')->with('sukses','Data Berhasil Di Hapus');
    }
}

