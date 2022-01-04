<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRekamediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rekamedia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pasien');
            $table->string('nama_pasien');
            $table->string('id_dokter');
            $table->string('nama_dokter');
            $table->date('tgl_pendaftaran');
            $table->string('diagnosis');
            $table->string('tindakan');
            $table->string('berat_badan');
            $table->date('tgl_periksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_rekamedia');
    }
}
