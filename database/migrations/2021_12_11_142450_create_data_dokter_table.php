<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_dokter');
            $table->string('id_user');
            $table->string('nama_dokter');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('tarif_pemeriksaan');
            
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
        Schema::dropIfExists('data_dokter');
    }
}
