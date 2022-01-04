<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataObatExport;
use Maatwebsite\Excel\Facades\Excel;
Use PDF;
class DataObatController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_obat = \App\DataObat::where('nama_obat','LIKE','%'.$request->cari.'%')->get();
            $data_obat = DataObat::with('datakategori')->paginate(2);
   
      
       
     
    }else{
        $data_obat = \App\DataObat::all();
        $kode = \App\DataObat::select('data_obat')->max('id_obat');
    	$addNol = '';
    	$kode = str_replace("OBT", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "OBT".$addNol.$incrementKode;
        
        $data_kategori_obat = \App\DataKategoriObat::all();
    }
        
        return view('data_obat.index',['data_obat'=> $data_obat,'data_kategori_obat'=> $data_kategori_obat,'id'=> $kodeBaru]);
    }
    public function create(Request $request)
    {
        $data_obat = \App\DataObat::create($request->all());
      if($request->hasFile('avatar')){
          $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
          $data_obat->avatar =$request->file('avatar')->getClientOriginalName();
          $data_obat->save();
      }
        return redirect('/data_obat')->with('sukses','Data Berhasil Di Masukan');
            
    }
    public function edit($id)
    {
        $data_kategori_obat = \App\DataKategoriObat::all();
        $data_obat = \App\DataObat::find($id);
       return view('data_obat/edit',['data_obat'=>$data_obat,'data_kategori_obat'=> $data_kategori_obat]);
    }
    public function update(Request $request,$id)
    {  
        $data_obat = \App\DataObat::find($id);
        $data_obat ->update($request->all());
        
        return redirect('/data_obat')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data_obat = \App\DataObat::find($id);
        $data_obat ->delete($id);
        return redirect('/data_obat')->with('sukses','Data Berhasil Di Hapus');
    }
    public function export() 
    {
        return Excel::download(new DataObatExport, 'DataObat.xlsx');
    }
    public function exportpdf() 
    {
    //     $pdf = PDF::loadView('pdf.invoice', $data);
    // return $pdf->download('invoice.pdf');
    // $pdf=PDF::loadHTML('<h1>DATA OBAT</h1>');
    // return $pdf->download('dataobat.pdf');
    $pdf=PDF::loadHTML('export.data');
    return $pdf->download('dataobat.pdf');
    }

}
