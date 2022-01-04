<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
 protected $table = 'data_obat';
 protected $primaryKey = 'id';
 protected $fillable = ['id_obat','nama_obat','id_kategori','jenis_obat','keterangan','harga','status','avatar'];
 public function datakategori()
 {
     return $this->belongsTo(DataKategoriObat::class,'id_kategori','id_kategori'); 
     
 }
 public function dataobat()
 {
     return $this->belongsTo(DataResep::class,'id_obat','id_obat'); 
     
 }
 public function getAvatar()
 {
     if(!$this->avatar){
         return asset('images/default.jpg');
     }
     return asset('images/'.$this->avatar);
 }
}

