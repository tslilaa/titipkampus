<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'tipe_lokasi',
        'koordinat_area',
    ];

    public function requestsAsal()
    {
        return $this->hasMany(Request::class, 'lokasi_awal_id');
    }

    public function requestsTujuan()
    {
        return $this->hasMany(Request::class, 'lokasi_tujuan_id');
    }
}
