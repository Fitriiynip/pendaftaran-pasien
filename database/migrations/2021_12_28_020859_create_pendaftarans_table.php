<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('tanggal_daftar');
            $table->string('no_telepon');
            $table->bigInteger('id_dokter')->unsigned();
            $table->foreign('id_dokter')->references('id')
                ->on('jadwal_dokters')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('jk');
            $table->string('jadwal_periksa');
            $table->bigInteger('id_ruang')->unsigned();
            $table->foreign('id_ruang')->references('id')
                ->on('ruangs')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('cara_bayar');
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
        Schema::dropIfExists('pendaftarans');
    }
}
