<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_transaksi = \App\DataTransaksi::where('id_pasien','LIKE','%'.$request->cari.'%')->get();
            $data_transaksi = DataTransaksi::with('datapasien')->paginate(2);
            $data_transaksi = DataTransaksi::with('datadokter')->paginate(2);
            
           
        }else{
        $data_transaksi = \App\DataTransaksi::all();
        $data_pasien = \App\DataPasien::all();
        $data_dokter = \App\DataDokter::all();

    }
        return view('data_transaksi.index',['data_transaksi'=> $data_transaksi,'data_pasien'=> $data_pasien,'data_dokter'=> $data_dokter]);
        
    }
    public function create(Request $request)
    {
        \App\DataTransaksi::create($request->all());
        
        return redirect('/data_transaksi')->with('sukses','Data Berhasil Di Masukan');

            
    }
    public function rekamedia($id)
    {
        $data_pendaftaran = \App\DataTransaksi::find($id);
     
       return view('data_transaksi/rekamedia',['data_transaksi'=>$data_transaksi]);
       
    }
    public function delete($id)
    {
        $data_transaksi = \App\DataTransaksi::find($id);
        $data_transaksi ->delete($id);
        return redirect('/data_transaksi')->with('sukses','Data Berhasil Di Hapus');
    }
}
