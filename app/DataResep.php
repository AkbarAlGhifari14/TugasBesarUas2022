<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataResep extends Model
{
    protected $table = 'data_resep';
    protected $primaryKey = 'id';
    
        protected $fillable = ['id_pasien','id_dokter','tarif_pemeriksaan','id_obat','harga','jumlah','aturan_makan','tgl_tebus_resep','total_obat'];
        
    public function datapasien()
    {
        return $this->belongsTo(DataPasien::class,'id_pasien','id_pasien'); 
        
    }
    public function datadokter()
    {
        return $this->belongsTo(DataDokter::class,'id_dokter','id_dokter'); 
        
    }
    public function dataobat()
    {
        return $this->belongsTo(DataObat::class,'id_obat','id_obat'); 
        
    }
}