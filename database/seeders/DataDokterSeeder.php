<?php

namespace Database\Seeders;

use App\Models\DataDokter;
use Illuminate\Database\Seeder;

class DataDokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dokter1 = DataDokter::create(['nik' => '1267154827395', 'id_dokter' => 1,
            'jk' => 'Laki-laki', 'id_spesialis' => 3, 'alamat' => 'Bandung']);

        $dokter2 = DataDokter::create(['nik' => '74735625831028', 'id_dokter' => 2,
            'jk' => 'Perempuan', 'id_spesialis' => 2, 'alamat' => 'Majalengka']);

        $dokter3 = DataDokter::create(['nik' => '918725463249823', 'id_dokter' => 3,
            'jk' => 'Laki-laki', 'id_spesialis' => 1, 'alamat' => 'Jakarta']);

    }
}
