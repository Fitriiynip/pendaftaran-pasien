<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $table = "ruangs";
    protected $visible = ['keterangan'];

    protected $fillable = ['keterangan'];

    public $timestamps = true;

    public function ruang()
    {
        $this->hasMany('App\Models\Pendaftaran', 'id_ruang');
    }
}
