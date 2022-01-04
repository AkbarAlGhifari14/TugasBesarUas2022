<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataResepsionis extends Model
{
    protected $table = 'data_resepsionis';

    protected $fillable = ['id_resepsionis','nama_resepsionis','alamat','telepon','id_user'];
}

