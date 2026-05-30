<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'bintang',
        'ulasan',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class, 'request_id');
    }
}
