<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        Message::create([
            'conversation_id' => 1,
            'sender_id' => 1,
            'message' => 'Halo kak, apakah request sudah diambil?',
            'is_read' => false,
        ]);

        Message::create([
            'conversation_id' => 1,
            'sender_id' => 2,
            'message' => 'Sudah kak, saya sedang menuju lokasi.',
            'is_read' => false,
        ]);

        Message::create([
            'conversation_id' => 1,
            'sender_id' => 1,
            'message' => 'Siap kak, terima kasih.',
            'is_read' => false,
        ]);
    }
}
