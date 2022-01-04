<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    protected $table = 'data_transaksi';
    protected $primaryKey = 'id';
    
        protected $fillable = ['id_transaksi','id_pasien','id_dokter','total_bayar','bayar','kembalian','tgl_pembayaran'];
        public function datapasien()
    {
        return $this->belongsTo(DataPasien::class,'id_pasien','id_pasien'); 
        
    }
    public function datadokter()
    {
        return $this->belongsTo(DataDokter::class,'id_dokter','id_dokter'); 
        
    }
}

