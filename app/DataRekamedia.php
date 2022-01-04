<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRekamedia extends Model

    {
        protected $table = 'data_rekamedia';
         protected $primaryKey = 'id';
        protected $fillable = ['id_pasien','nama_pasien','id_dokter','nama_dokter','tgl_pendaftaran','diagnosis','tindakan','berat_badan','tgl_periksa'];
        public function datadokter()
        {
            return $this->belongsTo(DataDokter::class,'id_dokter','id_dokter'); 
            
        }
    }
     

    