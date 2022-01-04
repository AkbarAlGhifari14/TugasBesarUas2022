<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    protected $table = 'data_pasien';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pasien','nama_pasien','alamat','telepon','tgl_lahir','jk','tgl_pemeriksaan'];
    
  
 }
 

