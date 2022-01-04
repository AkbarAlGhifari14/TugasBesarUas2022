<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataApotekerController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_apoteker = \App\DataApoteker::where('nama_apoteker','LIKE','%'.$request->cari.'%')->get();
        }else{
        $data_apoteker = \App\DataApoteker::all();
        $kode = \App\DataApoteker::select('data_apoteker')->max('id');
    	$addNol = '';
    	$kode = str_replace("APO", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
    	} elseif (strlen($kode == 3)) {
    		$addNol = "0";
    	}

    	$kodeBaru = "APO".$addNol.$incrementKode;
        

    }
        return view('data_apoteker.index',['data_apoteker'=> $data_apoteker,'id'=> $kodeBaru]);
    }
    public function create(Request $request)
    {
        $user = new \App\User;
        $user->hak_akses ='apoteker';
        $user->name =$request->nama_apoteker;
        $user->email =$request->email;
        $user->password =bcrypt('apoteker');
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['id_user'=> $user->id]);
        $dokter = \App\DataApoteker::create($request->all());
        return redirect('/data_apoteker')->with('sukses','Data Berhasil Di Masukan');
            
    }
    public function edit($id)
    {
        $data_apoteker = \App\DataApoteker::find($id);
       return view('data_apoteker/edit',['data_apoteker'=>$data_apoteker]);
    }
    public function update(Request $request,$id)
    {  
        $data_apoteker = \App\DataApoteker::find($id);
        $data_apoteker ->update($request->all());
        return redirect('/data_apoteker')->with('sukses','Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $data_apoteker = \App\DataApoteker::find($id);
        $data_apoteker ->delete($id);
        return redirect('/data_apoteker')->with('sukses','Data Berhasil Di Hapus');
    }
    
}
