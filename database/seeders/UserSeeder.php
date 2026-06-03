<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            [
                'email_kampus' => 'admin@kampus.ac.id'
            ],
            [
                'nim' => '221011401234',
                'nama_lengkap' => 'Admin Test',
                'nomor_whatsapp' => '08123456789',
                'password' => 'admin123',
            ]
        );

        User::firstOrCreate(
            [
                'email_kampus' => 'adminlila@kampus.ac.id'
            ],
            [
                'nim' => '23080960000',
                'nama_lengkap' => 'Lila',
                'nomor_whatsapp' => '088888888888',
                'password' => 'adminlila',
            ]
        );

        User::firstOrCreate(
            [
                'email_kampus' => 'helper@kampus.ac.id'
            ],
            [
                'nim' => '222222',
                'nama_lengkap' => 'Helper Kampus',
                'nomor_whatsapp' => '08123456789',
                'password' => '123456',
            ]
        );
        
    }
}