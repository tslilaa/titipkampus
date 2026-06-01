<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nama_kategori' => 'Makanan'
        ]);

        Category::create([
            'nama_kategori' => 'Minuman'
        ]);

        Category::create([
            'nama_kategori' => 'Dokumen'
        ]);

        Category::create([
            'nama_kategori' => 'Barang'
        ]);
    }
}