<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDokterController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_dokter = \App\DataDokter::where('nama_dokter','LIKE','%'.$request->cari.'%')->get();
        }else{
        $data_dokter = \App\DataDokter::all();
        $kode = \App\DataDokter::select('data_dokter')->max('id');
    	$addNol = '';
    	$kode = str_replace("DOK", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "DOK".$addNol.$incrementKode;
        

    }
        return view('data_dokter.index',['data_dokter'=> $data_dokter,'id'=> $kodeBaru]);
    }
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->hak_akses ='dokter';
        $user->name =$request->nama_dokter;
        $user->email =$request->email;
        $user->password =bcrypt('dokter');
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['id_user'=> $user->id]);
        $dokter = \App\DataDokter::create($request->all());
        return redirect('/data_dokter')->with('sukses','Data Berhasil Di Masukan');
            
    }
    public function edit($id)
    {
        $data_dokter = \App\DataDokter::find($id);
       return view('data_dokter/edit',['data_dokter'=>$data_dokter]);
    }
    public function update(Request $request,$id)
    {  
        $data_dokter = \App\DataDokter::find($id);
        $data_dokter ->update($request->all());
        return redirect('/data_dokter')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data_dokter = \App\DataDokter::find($id);
        $data_dokter ->delete($id);
        return redirect('/data_dokter')->with('sukses','Data Berhasil Di Hapus');
    }
    
}
