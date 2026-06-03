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
        ->withCount([
            'unreadMessages as unread_count' => function ($q) {
                $q->where('sender_id', '!=', Auth::id());
            }
        ])
        ->get()
        ->sortByDesc(function ($conversation) {
            return optional(
                $conversation->latestMessage
            )->created_at;
        });

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

        $chatClosed = false;

    if (
        $conversation->request &&
        $conversation->request->status === 'Done' &&
        $conversation->request->completed_at &&
        now()->gt(
            $conversation->request
                ->completed_at
                ->addMinutes(30)
        )
    ) {
        $chatClosed = true;
    }

        Message::where('conversation_id', $conversation->id)
            ->where('sender_id', '!=', Auth::id())
            ->update(['is_read' => true]);

        return view('chat-detail', compact('conversation', 'chatClosed'));
    }

    public function send(Request $request, Conversation $conversation)
    {
        if (
            $conversation->request &&
            $conversation->request->status === 'Done' &&
            $conversation->request->completed_at &&
            now()->gt(
                $conversation->request
                    ->completed_at
                    ->copy()
                    ->addMinutes(30)
            )
        ) {
            return back()->with(
                'error',
                'Percakapan telah ditutup.'
            );
        }

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
