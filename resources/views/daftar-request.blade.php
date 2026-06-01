<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

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
    <div class="relative w-full max-w-[420px] h-[95vh]
                bg-[#FAFAFA]
                rounded-[3rem]
                shadow-2xl
                overflow-hidden
                flex flex-col">

        <!-- HEADER -->
        <div class="px-6 pt-14">

            <div class="flex justify-between items-center mb-8">

                <button class="text-2xl text-gray-500">
                    ☰
                </button>

                <button class="text-2xl text-gray-500 relative">
                    🔔

                    <span class="absolute top-1 right-1
                                w-2 h-2 rounded-full bg-red-500">
                    </span>
                </button>

            </div>

            <h1 class="text-[34px] font-extrabold text-gray-900 mb-5">
                Daftar Request
            </h1>

            <!-- TAB -->
            <div class="flex gap-2 overflow-x-auto pb-1 mb-5">

                <a
                    href="{{ route('request.index') }}"
                    class="px-4 py-2 rounded-xl text-sm font-medium shrink-0
                    {{ request('status') == null
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500' }}">

                    Semua

                </a>

                <a
                    href="{{ route('request.index',['status'=>'Pending']) }}"
                    class="px-4 py-2 rounded-xl text-sm font-medium shrink-0
                    {{ request('status') == 'Pending'
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500' }}">

                    Menunggu

                </a>

                <a
                    href="{{ route('request.index',['status'=>'Taken']) }}"
                    class="px-4 py-2 rounded-xl text-sm font-medium shrink-0
                    {{ request('status') == 'Taken'
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500' }}">

                    Diproses

                </a>

                <a
                    href="{{ route('request.index',['status'=>'Done']) }}"
                    class="px-4 py-2 rounded-xl text-sm font-medium shrink-0
                    {{ request('status') == 'Done'
                        ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white'
                        : 'bg-gray-100 text-gray-500' }}">

                    Selesai

                </a>

            </div>

            <!-- FILTER -->
            <div class="flex justify-between items-center mb-6 gap-3">

                <button
                    class="flex items-center gap-2
                    border border-gray-200
                    px-4 py-2 rounded-xl
                    bg-white shadow-sm">

                    <span>☷</span>
                    <span class="font-medium text-sm">
                        Filter
                    </span>

                </button>

                <form
                    action="{{ route('request.index') }}"
                    method="GET"
                    class="flex items-center gap-2">

                    @if(request('status'))
                        <input
                            type="hidden"
                            name="status"
                            value="{{ request('status') }}">
                    @endif

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari request..."
                        class="w-40 px-3 py-2 rounded-xl border border-gray-200 text-sm">

                    <button
                        type="submit"
                        class="w-11 h-11 rounded-xl
                            border border-gray-200
                            bg-white shadow-sm
                            flex items-center justify-center text-lg">

                        🔍

                    </button>

                </form>

            </div>
        </div>

        <div class="flex-1 overflow-y-auto px-6 pb-32 space-y-5">

        @foreach($requests as $request)

            @php

                $icon = match($request->kategori->nama_kategori) {

                    'Makanan' => '🍔',
                    'Minuman' => '🥤',
                    'Dokumen' => '📄',
                    'Paket' => '📦',
                    'Obat' => '💊',

                    default => '🛍️'
                };

            @endphp

        <div class="border-b border-gray-200 pb-5">

            <div class="flex gap-4">

                <div class="w-20 h-20 rounded-2xl bg-gray-100 flex items-center justify-center text-4xl shadow-sm">
                    {{ $icon }}
                </div>
                <div class="flex-1">

                    <div class="flex justify-between items-start">

                        <div>

                            <h3 class="font-bold text-gray-900">
                                {{ $request->deskripsi_barang }}
                            </h3>

                            <p class="text-sm text-gray-400 mt-1">
                                {{ $request->lokasiAwal->nama_lokasi }}
                                →
                                {{ $request->lokasiTujuan->nama_lokasi }}
                            </p>

                        </div>

                        @php

                            $statusClass = match($request->status){
                                'Pending' => 'bg-orange-100 text-orange-500',
                                'Taken' => 'bg-blue-100 text-blue-500',
                                'On Way' => 'bg-purple-100 text-purple-500',
                                'Done' => 'bg-green-100 text-green-600',
                                default => 'bg-gray-100 text-gray-500'
                            };

                        @endphp

                        <span class="px-3 py-1 rounded-xl text-xs font-semibold {{ $statusClass }}">
                            {{ $request->status }}
                        </span>

                    </div>

                    <h2 class="font-bold text-xl mt-3">
                        Rp {{ number_format($request->nominal_tip,0,',','.') }}
                    </h2>

                </div>

            </div>

        </div>

    @endforeach

</div>

        <!-- FLOAT BUTTON -->
        <a
            href="/request"
            class="absolute bottom-10 right-10
                w-16 h-16 rounded-full
                bg-gradient-to-r
                from-[#7C3AED]
                to-[#60A5FA]
                text-white text-5xl
                shadow-xl flex items-center justify-center">

            +

        </a>

    </div>

</body>
</html>