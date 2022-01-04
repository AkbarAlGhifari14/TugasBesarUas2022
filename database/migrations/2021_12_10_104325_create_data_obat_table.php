<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_obat');
            $table->string('nama_obat');
            $table->string('id_kategori');
            $table->string('jenis_obat');
            $table->string('keterangan');
            $table->string('harga');
            $table->string('status');
            $table->string('avatar');
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
        Schema::dropIfExists('data_obat');
    }
}
