<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $conversations = Conversation::with([
            'request.pemohon',
            'request.runner',
            'messages',
            'latestMessage'
        ])
        ->latest()
        ->get();

        return view('chat', compact('conversations'));
    }

    public function show(Conversation $conversation)
    {
        $conversation->load([
            'request.pemohon',
            'request.runner',
            'messages' => function ($query) {
                $query->orderBy('created_at', 'asc');
            },
            'messages.sender'
        ]);

        return view('chat-detail', compact('conversation'));
    }

    public function send(Request $request, Conversation $conversation)
    {
        $request->merge([
            'message' => trim($request->message)
        ]);

        $request->validate([
            'message' => 'required|string|max:1000'
        ]);

        Message::create([
            'conversation_id' => $conversation->id,
            'sender_id' => Auth::id(),
            'message' => $request->message,
            'is_read' => false,
        ]);

        return redirect()
            ->route('chat.show', $conversation->id);
    }
}
