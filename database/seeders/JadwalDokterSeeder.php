<?php

namespace Database\Seeders;

use App\Models\JadwalDokter;
use Illuminate\Database\Seeder;

class JadwalDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jadwal1 = JadwalDokter::create(['nama_dokter' => 'Dr Sansan', 'waktu_mulai' => '10.00 WIB',
            'waktu_akhir' => '12.00 WIB']);

        $jadwal2 = JadwalDokter::create(['nama_dokter' => 'Dr Sindy', 'waktu_mulai' => '09.00 WIB',
            'waktu_akhir' => '13.00 WIB']);

        $jadwal3 = JadwalDokter::create(['nama_dokter' => 'Dr Jamal', 'waktu_mulai' => '08.00 WIB',
            'waktu_akhir' => '14.00 WIB']);

    }
}
