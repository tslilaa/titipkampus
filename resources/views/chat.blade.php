<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - TitipKampus</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="relative
            w-full
            max-w-[420px]
            h-[95vh]
            bg-[#FAFAFA]
            rounded-[3rem]
            shadow-2xl
            overflow-hidden
            flex
            flex-col">

        @include('components.sidebar')

        <div class="flex-1 overflow-y-auto px-6 pt-14 pb-8">

        <!-- TOPBAR -->
        <div class="flex justify-between items-center mb-8">

            <!-- SIDEBAR -->
            <button
                onclick="openSidebar()"
                class="text-slate-600">

                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2.2"
                    stroke="currentColor"
                    class="w-7 h-7">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                </svg>

            </button>

            <!-- NOTIFICATION -->
            <a href="/notifikasi"
            class="relative text-slate-500">

                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="w-7 h-7">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 1-5.714 0A8.967 8.967 0 0 1 6 16.139V11a6 6 0 1 1 12 0v5.139a8.967 8.967 0 0 1-3.143.943z"/>

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 19a3 3 0 1 1-6 0"/>
                </svg>

                <span class="absolute
                            top-0
                            right-0
                            w-2.5
                            h-2.5
                            rounded-full
                            bg-red-500">
                </span>

            </a>

        </div>

        <!-- TITLE -->
        <h1 class="text-[42px]
                font-extrabold
                tracking-[-1px]
                text-slate-900
                mb-6">

            Chat
        </h1>

        <!-- SEARCH -->
        <div class="mb-8">

            <div class="relative">

                <input
                    id="searchChat"
                    type="text"
                    placeholder="Cari percakapan..."
                    class="w-full
                        bg-slate-100
                        rounded-[24px]
                        py-4
                        pl-14
                        pr-5
                        outline-none
                        text-[15px]
                        text-slate-700
                        placeholder:text-slate-400
                        focus:ring-4
                        focus:ring-violet-100
                        transition"
                >

                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="absolute
                            left-5
                            top-1/2
                            -translate-y-1/2
                            w-5
                            h-5
                            text-slate-400">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 5.5 5.5a7.5 7.5 0 0 0 11.15 11.15z"/>
                </svg>

            </div>

        </div>

        <!-- CHAT LIST -->
        <div class="space-y-5">

            @forelse($conversations as $conversation)

                @php

                    $currentUserId = auth()->id();

                    if (
                        $conversation->request &&
                        $conversation->request->pemohon_id == $currentUserId
                    ) {
                        $otherUser = $conversation->request->runner;
                    } else {
                        $otherUser = $conversation->request->pemohon;
                    }

                    $lastMessage = $conversation->latestMessage;

                @endphp

                <a
                    href="{{ route('chat.show', $conversation->id) }}"
                    class="chat-item
                    flex
                    justify-between
                    items-center
                    hover:bg-slate-50
                    rounded-[28px]
                    p-4
                    transition duration-200"
                >

                    <div class="flex items-center gap-4">

                        <img
                            src="https://randomuser.me/api/portraits/men/32.jpg"
                            alt="User"
                            class="w-16 h-16 rounded-full object-cover"
                        >

                        <div>

                            <h3 class="
                                {{ $conversation->unread_count > 0
                                    ? 'font-extrabold text-gray-900'
                                    : 'font-bold text-gray-900'
                                }}
                            ">
                                {{ $otherUser?->nama_lengkap ?? 'Pengguna' }}
                            </h3>

                            <p class="
                                text-sm
                                truncate
                                max-w-[180px]
                                {{
                                    $conversation->unread_count > 0
                                    ? 'font-semibold text-gray-900'
                                    : 'text-gray-500'
                                }}
                            ">
                                {{ $lastMessage?->message ?? 'Belum ada pesan' }}
                            </p>

                        </div>

                    </div>

                    <div class="text-right flex flex-col items-end gap-2">

                        <p class="text-sm text-gray-400">
                            {{ $lastMessage?->created_at?->format('H:i') }}
                        </p>

                        @if($conversation->unread_count > 0)

                            <span
                                class="
                                min-w-[22px]
                                h-[22px]
                                px-1
                                bg-[#7C3AED]
                                text-white
                                text-xs
                                font-bold
                                rounded-full
                                flex
                                items-center
                                justify-center
                                "
                            >
                                {{ $conversation->unread_count }}
                            </span>

                        @endif

                    </div>

                </a>

            @empty

                <div class="text-center py-20">

                    <p class="text-gray-500">
                        Belum ada percakapan
                    </p>

                </div>

            @endforelse

        </div>

        </div>
    </div>

</body>
</html>