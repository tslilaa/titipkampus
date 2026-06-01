<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Request;

class RequestSeeder extends Seeder
{
    public function run(): void
    {
        Request::create([
            'pemohon_id' => 1,
            'runner_id' => 2,
            'kategori_id' => 1,
            'lokasi_awal_id' => 1,
            'lokasi_tujuan_id' => 2,
            'deskripsi_barang' => 'Titip ambil makanan di kantin',
            'nominal_tip' => 10000,
            'status' => 'Taken',
        ]);
    }
}
