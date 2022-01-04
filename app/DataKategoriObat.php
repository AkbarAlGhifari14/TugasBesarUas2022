<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKategoriObat extends Model
{
    protected $table = 'data_kategori_obat';
    protected $primaryKey = 'id';
 protected $fillable = ['id_kategori','nama_kategori'];
}