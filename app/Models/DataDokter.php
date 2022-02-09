<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDokter extends Model
{
    use HasFactory;
    protected $table = "data_dokters";
    protected $visible = ['nik', 'id_dokter', 'jk', 'id_spesialis', 'alamat'];

    protected $fillable = ['nik', 'id_dokter', 'jk', 'id_spesialis', 'alamat'];

    public $timestamps = true;

    public function jadwal()
    {
        return $this->belongsTo('App\Models\JadwalDokter', 'id_dokter');
    }
    public function spesialis()
    {
        return $this->belongsTo('App\Models\Spesialis', 'id_spesialis');
    }
}
