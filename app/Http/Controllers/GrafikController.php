<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;
use App\Models\DataResep;
class GrafikController extends Controller
{
    public function dashboard(){
        $data_transaksi = \App\DataTransaksi::all();
$title = "Hasil";
// $hasil = [['name'=>'ie','y'=>50],['name'=>'ieaa','y'=>40]];
$hasil = [];
$data_obat =\App\ DataObat::get();
foreach ($data_obat as $key => $kd){
$id_obat = $kd->id_obat;

$urut = $kd->id_obat;
$total = \App\DataResep::where('id_obat',$id_obat)->count();

$a['name']='Kode Obat '.$urut;
$a['y'] = $total;
array_push($hasil,$a);


}
return view('admin.dashboard',compact('title','hasil','data_transaksi'));

    }
}
