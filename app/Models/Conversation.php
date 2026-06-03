<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function latestMessage()
    {
    return $this->hasOne(Message::class)->latestOfMany();
    }

    public function unreadMessages()
    {
        return $this->hasMany(Message::class)
            ->where('is_read', false);
    }

}