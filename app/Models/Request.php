<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemohon_id',
        'runner_id',
        'kategori_id',
        'lokasi_awal_id',
        'lokasi_tujuan_id',
        'deskripsi_barang',
        'nominal_tip',
        'status',
    ];

    public function pemohon()
    {
        return $this->belongsTo(User::class, 'pemohon_id');
    }

    public function runner()
    {
        return $this->belongsTo(User::class, 'runner_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function lokasiAwal()
    {
        return $this->belongsTo(Location::class, 'lokasi_awal_id');
    }

    public function lokasiTujuan()
    {
        return $this->belongsTo(Location::class, 'lokasi_tujuan_id');
    }

    public function rating()
    {
        return $this->hasOne(Rating::class, 'request_id');
    }
}
