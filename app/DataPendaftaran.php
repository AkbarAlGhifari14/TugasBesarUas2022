<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPendaftaran extends Model
{
    protected $table = 'data_pendaftaran';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pasien','id_dokter','tgl_pendaftaran'];
   
    public function datapasien()
    {
        return $this->belongsTo(DataPasien::class,'id_pasien','id_pasien'); 
        
    }
    public function datadokter()
    {
        return $this->belongsTo(DataDokter::class,'id_dokter','id_dokter'); 
        
    }
   
    public function kategori() {
    	return $this->hasOne(DataPasien::class,'id','id_pasien'); 
    }
}
