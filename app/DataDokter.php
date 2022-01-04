<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDokter extends Model
{
    protected $table = 'data_dokter';

    protected $fillable = ['id_dokter','nama_dokter','alamat','telepon','tarif_pemeriksaan','id_user'];
}