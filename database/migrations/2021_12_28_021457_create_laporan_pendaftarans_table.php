<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('keluhan');
            $table->date('tanggal_daftar');
            $table->string('no_telepon');
            $table->string('nama_dokter');
            $table->string('jk');
            $table->date('jadwal_periksa');
            $table->string('ruang');
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
        Schema::dropIfExists('laporan_pendaftarans');
    }
}
