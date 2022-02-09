<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->bigInteger('id_dokter')->unsigned();
            $table->foreign('id_dokter')->references('id')
                ->on('jadwal_dokters')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('jk');
            $table->bigInteger('id_spesialis')->unsigned();
            $table->foreign('id_spesialis')->references('id')
                ->on('spesialis')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('alamat');
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
        Schema::dropIfExists('data_dokters');
    }
}
