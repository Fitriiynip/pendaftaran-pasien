<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;
    protected $table = "spesialis";
    protected $visible = ['nanma_spesialis'];

    protected $fillable = ['nanma_spesialis'];

    public $timestamps = true;

    public function spesialis()
    {
        $this->hasMany('App\Models\DataDokter', 'id_spesialis');
    }
}
