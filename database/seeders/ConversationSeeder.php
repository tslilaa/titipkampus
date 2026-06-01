<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conversation;

class ConversationSeeder extends Seeder
{
    public function run(): void
    {
        Conversation::create([
            'request_id' => 1,
        ]);
    }
}
