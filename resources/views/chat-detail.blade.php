<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Detail</title>

```
@vite('resources/css/app.css')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

    body{
        font-family:'Poppins',sans-serif;
    }
</style>
```

</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

@php
$currentUser = auth()->user();

if (
    $conversation->request &&
    $conversation->request->pemohon_id == $currentUser->id
) {
    $otherUser = $conversation->request->runner;
} else {
    $otherUser = $conversation->request->pemohon;
}
@endphp

<div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-hidden flex flex-col">

```
<!-- HEADER -->
<div class="px-6 pt-12 pb-5 border-b border-gray-200 flex justify-between items-center">

    <div class="flex items-center gap-4">

        <a href="{{ route('chat.index') }}"
            class="text-xl text-gray-700">
            ←
        </a>

        <img
            src="{{ $otherUser?->foto_profil 
                ? asset('storage/' . $otherUser->foto_profil)
                : 'https://randomuser.me/api/portraits/men/32.jpg' }}"
            class="w-12 h-12 rounded-full object-cover"
        >

        <div>

            <h2 class="font-bold text-gray-900">
                {{ $otherUser?->nama_lengkap ?? 'Pengguna' }}
            </h2>

            <p class="text-sm text-green-500">
                Online
            </p>

        </div>

    </div>

    <button
        type="button"
        class="text-2xl cursor-not-allowed opacity-50">
        📞
    </button>

</div>

<!-- CHAT BODY -->
<div id="chat-body" class="flex-1 overflow-y-auto px-5 py-6 space-y-5">

    @foreach($conversation->messages as $message)

        @if($message->sender_id == auth()->id())

            <!-- PESAN SENDIRI -->
            <div class="flex flex-col items-end">

                <div
                    class="bg-gradient-to-r from-[#7C3AED] to-[#60A5FA]
                    text-white rounded-[1.5rem] rounded-br-sm
                    px-5 py-4 max-w-[80%] shadow-sm">

                    {{ $message->message }}

                </div>

                <p class="text-xs text-gray-400 mt-2 mr-2">
                    {{ $message->created_at->format('H:i') }}
                </p>

            </div>

        @else

            <!-- PESAN LAWAN -->
            <div>

                <div
                    class="bg-white rounded-[1.5rem] rounded-bl-sm
                    px-5 py-4 max-w-[80%] shadow-sm">

                    {{ $message->message }}

                </div>

                <p class="text-xs text-gray-400 mt-2 ml-2">
                    {{ $message->created_at->format('H:i') }}
                </p>

            </div>

        @endif

    @endforeach

</div>

<!-- INPUT -->
<div class="p-5 border-t border-gray-200">

@if(!$chatClosed)

<form
    action="{{ route('chat.send', $conversation->id) }}"
    method="POST">

    @csrf

    <div
        class="flex items-center bg-white rounded-full
        border border-gray-200 px-5 py-3 shadow-sm">

        <input
            id="messageInput"
            type="text"
            name="message"
            placeholder="Ketik pesan..."
            class="flex-1 outline-none text-sm bg-transparent"
            required
        >

        <button
            type="submit"
            class="text-2xl text-[#7C3AED]">
            ➤
        </button>

    </div>

</form>

@else

<div
    class="bg-gray-100
    rounded-2xl
    p-4
    text-center">

    <p class="font-semibold text-gray-700">
        Percakapan Ditutup
    </p>

    <p class="text-sm text-gray-500 mt-1">
        Request telah selesai lebih dari 30 menit.
    </p>

</div>

@endif

</div>

</div>
<script>
window.onload = function () {

    const chatBody = document.getElementById('chat-body');

    if (chatBody) {
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    const input = document.getElementById('messageInput');

    if (input) {
        input.focus();
    }
};
</script>

</body>
</body>
</html>
