<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataResepController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_resep = \App\DataResep::where('nama_obat','LIKE','%'.$request->cari.'%')->get();
            $data_resep = DataResep::with('dataobat')->paginate(2);
            $data_resep = DataDokter::with('datadokter')->paginate(2);
            $data_resep = DataPasien::with('datapasien')->paginate(2);

        }else{
   
        $data_resep = \App\DataResep::with('dataobat')->paginate(5);
        $data_obat = \App\DataObat::all();
        $data_dokter = \App\DataDokter::all();
        $data_obat = \App\DataResep::with('dataobat')->paginate();
        
      
            $categories = [];
            $data = [];
           
            foreach($data_obat as $id){
            $categories[]=$id->dataobat->nama_obat;
 
        }
        foreach($data_obat as $id){
            $data[]= $id->jumlah;
               
           
        }
    }
    
        return view('data_resep.index',['data_resep'=> $data_resep,'data_obat'=> $data_obat,'data_dokter'=> $data_dokter,'categories'=> $categories,'data'=> $data]);
    }
    public function create(Request $request)
    {
        $id = $request->input('id');
        $id_pasien = $request->input('id_pasien');
        $id_dokter = $request->input('id_dokter');
        $id_obat = $request->input('id_obat');
        $harga = $request->input('harga');
        $tarif = $request->input('tarif_pemeriksaan');
        $jumlah = $request->input('jumlah');
        $aturan_makan = $request->input('aturan_makan');
        $tgl_tebus_resep = $request->input('tgl_tebus_resep');
        
        


        $total_obat =($harga * $jumlah + $tarif) ;
      

        $data_resep = \App\DataResep::all();
        $data_dokter = \App\DataDokter::all();
        \App\DataResep::create([
           
            'id'=>  $id,
            'id_pasien'=>  $id_pasien,
            'id_dokter'=>  $id_dokter,
            'id_obat'=>  $id_obat,
            'harga'=>  $harga,
            'jumlah'=>  $jumlah,
            'aturan_makan'=>  $aturan_makan,
            'tgl_tebus_resep'=>  $tgl_tebus_resep,
            'tarif_pemeriksaan' => $tarif,
            'total_obat' => $total_obat
      
            
        ]);
        
        return redirect('/data_resep')->with('sukses','Data Berhasil Di Masukan ',['data_resep'=> $data_resep]);
            
    }
    public function transaksi($id)
    {
        $kode = \App\DataObat::select('data_obat')->max('id_obat');
    	$addNol = '';
    	$kode = str_replace("TRANS", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "TRANS".$addNol.$incrementKode;
        
        $data_kategori_obat = \App\DataKategoriObat::all();
        $data_transaksi = \App\DataResep::find($id);
       return view('data_transaksi/transaksi',['data_transaksi'=>$data_transaksi,'id'=>$kodeBaru]);
    }
    public function update(Request $request,$id)
    {  
        $data_resep = \App\DataResep::find($id);
        $data_resep ->update($request->all());
        return redirect('/data_resep')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data_resep = \App\DataResep::find($id);
        $data_resep ->delete($id);
        return redirect('/data_resep')->with('sukses','Data Berhasil Di Hapus');

    }
    
    
}
