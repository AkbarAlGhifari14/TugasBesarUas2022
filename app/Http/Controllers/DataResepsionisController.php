<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataResepsionisController extends Controller
{
    public function index(Request $request)
    {
    if($request->has('cari')){
        $data_resepsionis = \App\DataResepsionis::where('nama_resepsionis','LIKE','%'.$request->cari.'%')->get();
    }else{
    $data_resepsionis = \App\DataResepsionis::all();
    $kode = \App\DataResepsionis::select('data_resepsionis')->max('id');
    $addNol = '';
    $kode = str_replace("RSP", "", $kode);
    $kode = (int) $kode + 1;
    $incrementKode = $kode;

    if (strlen($kode) == 1) {
        $addNol = "000";
    } elseif (strlen($kode) == 2) {
        $addNol = "00";
    } elseif (strlen($kode == 3)) {
        $addNol = "0";
    }

    $kodeBaru = "RSP".$addNol.$incrementKode;
    

}
    return view('data_resepsionis.index',['data_resepsionis'=> $data_resepsionis,'id'=> $kodeBaru]);
}
public function create(Request $request)
{
    $user = new \App\User;
    $user->hak_akses ='resepsionis';
    $user->name =$request->nama_resepsionis;
    $user->email =$request->email;
    $user->password =bcrypt('resepsionis');
    $user->remember_token = str_random(60);
    $user->save();

    $request->request->add(['id_user'=> $user->id]);
    $dokter = \App\DataResepsionis::create($request->all());
    return redirect('/data_resepsionis')->with('sukses','Data Berhasil Di Masukan');
        
}
public function edit($id)
{
    $data_resepsionis = \App\DataResepsionis::find($id);
   return view('data_resepsionis/edit',['data_resepsionis'=>$data_resepsionis]);
}
public function update(Request $request,$id)
{  
    $data_resepsionis = \App\DataResepsionis::find($id);
    $data_resepsionis ->update($request->all());
    return redirect('/data_resepsionis')->with('sukses','Data Berhasil Di Update');
}
public function delete($id)
{
    $data_resepsionis = \App\DataResepsionis::find($id);
    $data_resepsionis ->delete($id);
    return redirect('/data_resepsionis')->with('sukses','Data Berhasil Di Hapus');
}
}

