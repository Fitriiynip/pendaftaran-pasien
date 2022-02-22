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
        $ruang1 = Ruang::create(['Ruangan' => 'IGD']);

        $ruang2 = Ruang::create(['Ruangan' => 'Ruang VIP']);

        $ruang3 = Ruang::create(['Ruangan' => 'Ruangan oprasi']);

    }
}
