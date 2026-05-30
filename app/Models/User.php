<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Request;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'email_kampus',
        'nomor_whatsapp',
        'foto_profil',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function requestsSebagaiPemohon()
    {
        return $this->hasMany(Request::class, 'pemohon_id');
    }

    public function requestsSebagaiRunner()
    {
        return $this->hasMany(Request::class, 'runner_id');
    }
}
