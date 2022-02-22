<?php

namespace App\Models;
use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwaldokter extends Model
{
    use HasFactory;

    protected $table = "jadwal_dokters";
    protected $visible = ['nama_dokter', 'waktu_mulai', 'waktu_akhir'];

    protected $fillable = ['nama_dokter', 'waktu_mulai', 'waktu_akhir'];

    public $timestamps = true;

    public function pendaftaran()
    {
       return $this->hasMany('App\Models\Pendaftaran', 'id_dokter');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function ($parent) {
            if ($parent->pendaftaran->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;

            }
        });

    }
}
