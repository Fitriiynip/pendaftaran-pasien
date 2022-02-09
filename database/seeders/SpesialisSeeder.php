<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $spesialis1 = Spesialis::create(['nama_spesialis' => 'Penyakit Dalam']);

        $spesialis2 = Spesialis::create(['nama_spesialis' => 'Dokter Umum']);

        $spesialis3 = Spesialis::create(['nama_spesialis' => 'Dokter Gigi']);

    }
}
