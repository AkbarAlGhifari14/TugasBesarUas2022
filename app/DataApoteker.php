<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataApoteker extends Model
{
    protected $table = 'data_apoteker';

    protected $fillable = ['id_apoteker','nama_apoteker','alamat','telepon','id_user'];
}
