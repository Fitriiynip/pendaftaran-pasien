<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $visible = ['nama_kamar', 'id_ruang'];

    protected $fillable = ['nama_kamar', 'id_ruang'];

    public $timestamps = true;

    public function ruang()
    {
        return $this->belongsTo('App\Models\Ruang', 'id_ruang');
    }
}
