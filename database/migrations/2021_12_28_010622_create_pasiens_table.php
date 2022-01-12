<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->biginteger('no_identitas')->unsigned();
            $table->integer('Nik');
            $table->biginteger('id_KepalaKeluarga')->unsigned();
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->biginteger('no_telpon')->unsigned();

            //fk
            $table->foreign('id_KepalaKeluarga')->references('id')
            ->on('kepala_keluargas')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('pasiens');
    }
}
