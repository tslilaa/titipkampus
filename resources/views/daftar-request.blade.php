<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Daftar Request</title>

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
        bg-[#F8F8FB]
        rounded-[3rem]
        shadow-2xl
        overflow-hidden
        flex flex-col">

        @include('components.sidebar')

        <!-- HEADER -->
        <div class="px-6 pt-14 shrink-0">

            <div class="flex justify-between items-center mb-8">

                <!-- SIDEBAR -->
                <button
                    onclick="openSidebar()"
                    class="text-slate-600"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-7 h-7"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"
                        />
                    </svg>
                </button>

                <!-- RIGHT ACTION -->
                <div class="flex items-center gap-3">

                    <!-- BUTTON TAMBAH REQUEST -->
                    <a
                        href="/request"
                        class="text-gray-500
                        flex items-center
                        justify-center
                        w-7 h-7
                        transition
                        hover:text-gray-700"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2.2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"
                            />
                        </svg>
                    </a>

                    <!-- NOTIF -->
                    <a
                        href="/notifikasi"
                        class="text-gray-500 relative block"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-7 h-7"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032
                                2.032 0 0118 14.158V11
                                a6.002 6.002 0 00-4-5.659V5
                                a2 2 0 10-4 0v.341C7.67
                                6.165 6 8.388 6 11v3.159
                                c0 .538-.214 1.055-.595
                                1.436L4 17h5m6 0v1
                                a3 3 0 11-6 0v-1m6 0H9"
                            />
                        </svg>

                        <span class="absolute
                            top-0 right-0
                            w-2.5 h-2.5
                            bg-red-500
                            rounded-full
                            border-2 border-[#FAFAFA]">
                        </span>
                    </a>

                </div>

            </div>

            <!-- TITLE -->
            <h1 class="text-[34px] font-extrabold text-gray-900 mb-5">
                Daftar Request
            </h1>

            <!-- TAB -->
            <div class="flex gap-2 overflow-x-auto pb-1 mb-5">

                <a
                    href="{{ route('request.index') }}"
                    class="px-4 py-2 rounded-xl
                    text-sm font-medium shrink-0
                    {{
                        request('status') == null
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500'
                    }}"
                >
                    Semua
                </a>

                <a
                    href="{{ route('request.index', ['status' => 'Taken']) }}"
                    class="px-4 py-2 rounded-xl
                    text-sm font-medium shrink-0
                    {{
                        request('status') == 'Taken'
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500'
                    }}"
                >
                    Diproses
                </a>

                <a
                    href="{{ route('request.index', ['status' => 'Done']) }}"
                    class="px-4 py-2 rounded-xl
                    text-sm font-medium shrink-0
                    {{
                        request('status') == 'Done'
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500'
                    }}"
                >
                    Selesai
                </a>

            </div>

        </div>
        <!-- END HEADER -->

        <!-- SCROLL CONTENT -->
        <div class="flex-1 min-h-0 overflow-y-auto px-6 pb-32 space-y-4">

            @forelse($requests as $request)

                @php

                    $icon = match($request->kategori?->nama_kategori) {

                        'Makanan' => '🍔',
                        'Minuman' => '🥤',
                        'Dokumen' => '📄',
                        'Paket' => '📦',
                        'Obat' => '💊',

                        default => '🛍️'
                    };

                    $link = match(request('status')) {

                        'Taken' => route(
                            'request.process',
                            $request->id
                        ),

                        'Done' => route(
                            'request.process',
                            $request->id
                        ),

                        default => route(
                            'request.helper',
                            $request->id
                        )
                    };

                    $statusClass = match($request->status) {

                        'Pending' =>
                            'bg-orange-100 text-orange-600',

                        'Taken' =>
                            'bg-blue-100 text-blue-600',

                        'On Way' =>
                            'bg-purple-100 text-purple-600',

                        'Done' =>
                            'bg-green-100 text-green-600',

                        default =>
                            'bg-gray-100 text-gray-500'
                    };

                @endphp

                <a
                    href="{{ $link }}"
                    class="block
                    bg-white
                    rounded-[28px]
                    border border-slate-200
                    shadow-sm
                    p-4
                    hover:shadow-md
                    transition"
                >

                    <div class="flex gap-4">

                        <!-- ICON -->
                        <div class="w-20 h-20
                            rounded-2xl
                            bg-gray-100
                            flex items-center
                            justify-center
                            text-4xl
                            shrink-0">

                            {{ $icon }}

                        </div>

                        <!-- CONTENT -->
                        <div class="flex-1 min-w-0">

                            <div class="flex justify-between gap-3">

                                <div class="min-w-0">

                                    <h3 class="font-bold text-gray-900 text-lg truncate">
                                        {{ $request->deskripsi_barang }}
                                    </h3>

                                    <p class="text-sm text-slate-500 mt-1">
                                        {{ $request->pemohon?->nama_lengkap }}
                                    </p>

                                    <p class="text-sm text-gray-400 mt-2 truncate">
                                        {{ $request->lokasiAwal?->nama_lokasi }}
                                        →
                                        {{ $request->lokasiTujuan?->nama_lokasi }}
                                    </p>

                                    <p class="text-xs text-slate-400 mt-1">
                                        {{ $request->created_at->diffForHumans() }}
                                    </p>

                                </div>

                                <!-- STATUS -->
                                <span class="px-4 py-1.5
                                    rounded-full
                                    text-xs
                                    font-bold
                                    h-fit
                                    whitespace-nowrap
                                    {{ $statusClass }}">

                                    {{ $request->status }}

                                </span>

                            </div>

                            <!-- TIP -->
                            <h2 class="font-extrabold text-2xl mt-4">
                                Rp {{ number_format($request->nominal_tip,0,',','.') }}
                            </h2>

                        </div>

                    </div>

                </a>

            @empty

                <div class="text-center py-24">

                    <p class="text-slate-400 text-sm">
                        Belum ada request
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</body>
</html>