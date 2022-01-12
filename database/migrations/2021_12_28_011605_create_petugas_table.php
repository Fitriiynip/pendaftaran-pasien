<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien');
            $table->integer('kode_petugas');
            $table->string('nama_petugas');
            $table->string('jk_petugas');
            $table->string('alamat');
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('pasiens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
