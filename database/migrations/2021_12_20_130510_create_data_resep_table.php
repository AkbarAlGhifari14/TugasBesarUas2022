<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_resep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pasien');
            $table->string('id_dokter');
            $table->string('id_obat');
            $table->string('jumlah');
            $table->string('aturan_makan');
            $table->date('tgl_tebus_resep');
            $table->string('total_obat');
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
        Schema::dropIfExists('data_resep');
    }
}
