<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        Location::create([
            'nama_lokasi' => 'Gedung A',
            'tipe_lokasi' => 'Gedung',
            'koordinat_area' => null,
        ]);

        Location::create([
            'nama_lokasi' => 'Gedung B',
            'tipe_lokasi' => 'Gedung',
            'koordinat_area' => null,
        ]);

        Location::create([
            'nama_lokasi' => 'Perpustakaan',
            'tipe_lokasi' => 'Fasilitas',
            'koordinat_area' => null,
        ]);

        Location::create([
            'nama_lokasi' => 'Kantin Pusat',
            'tipe_lokasi' => 'Kantin',
            'koordinat_area' => null,
        ]);

        Location::create([
            'nama_lokasi' => 'Area Parkir',
            'tipe_lokasi' => 'Parkir',
            'koordinat_area' => null,
        ]);
    }
}