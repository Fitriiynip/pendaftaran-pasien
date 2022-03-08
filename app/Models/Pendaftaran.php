<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = "pendaftarans";
    protected $visible = ['nama_pasien', 'tanggal_daftar', 'no_telepon', 'id_dokter', 'jk', 'jadwalperiksa','alamatpasien','kamar', 'id_ruang'];

    protected $fillable = ['nama_pasien', 'tanggal_daftar', 'no_telepon', 'id_dokter', 'jk', 'jadwalperiksa','alamatpasien', 'kamar', 'id_ruang'];

    public $timestamps = true;

    public function ruang()
    {
        return $this->belongsTo('App\Models\Ruang', 'id_ruang');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\Models\JadwalDokter', 'id_dokter');
    }

    public function kamar()
    {
        return $this->belongsTo('App\Models\Kamar', 'id_kamar');
    }
}
