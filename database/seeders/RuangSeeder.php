<?php

namespace Database\Seeders;

use App\Models\Ruang;
use Illuminate\Database\Seeder;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ruang1 = Ruang::create(['keterangan' => 'Cempaka Putih']);

        $ruang2 = Ruang::create(['keterangan' => 'Mawar']);

        $ruang3 = Ruang::create(['keterangan' => 'Melati']);

    }
}
