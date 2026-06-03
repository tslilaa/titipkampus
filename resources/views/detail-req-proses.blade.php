<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Request Diproses</title>

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
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10">

        <!-- HEADER -->
        <div class="flex items-center mb-8">

            <a
                href="javascript:history.back()"
                class="text-gray-700 text-2xl mr-4"
            >
                ←
            </a>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Detail Request
            </h1>

        </div>

        <!-- CARD REQUEST -->
        <div class="flex justify-between items-start bg-white rounded-3xl p-4 shadow-sm border border-gray-100 mb-8">

            <div class="flex gap-4">

                <img
                    src="https://cdn-icons-png.flaticon.com/512/5787/5787016.png"
                    class="w-16 h-16 rounded-2xl object-cover"
                >

                <div>

                    <h2 class="font-bold text-gray-900 text-lg">
                        {{ $request->deskripsi_barang }}
                    </h2>

                    <p class="text-sm text-gray-400">
                        Request ID: #{{ str_pad($request->id, 3, '0', STR_PAD_LEFT) }}
                    </p>

                    <p class="text-xs text-gray-400 mt-2">
                        {{ $request->created_at->diffForHumans() }}
                    </p>

                </div>

            </div>

            <!-- STATUS -->
             @php
            $statusClass = match($request->status) {

                'Pending' =>
                    'bg-yellow-100 text-yellow-600',

                'Taken' =>
                    'bg-blue-100 text-blue-600',

                'Completed' =>
                    'bg-green-100 text-green-600',

                default =>
                    'bg-gray-100 text-gray-600'
            };
            @endphp
            <span class="{{ $statusClass }} px-4 py-2 rounded-xl text-sm font-semibold">
                {{ $request->status }}
            </span>

        </div>

        <!-- DETAIL -->
        <div class="space-y-7">

            <div class="flex gap-4">
                <span class="text-2xl">👜</span>
                <div>
                    <p class="text-sm text-gray-400">Jenis Titipan</p>
                    <h3 class="font-bold text-gray-900">
                        {{ $request->kategori->nama_kategori }}
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">
                <span class="text-2xl">📍</span>
                <div>
                    <p class="text-sm text-gray-400">Dari</p>
                    <h3 class="font-bold text-gray-900">{{ $request->lokasiAwal->nama_lokasi }}</h3>
                    <p class="text-sm text-gray-400">
                        {{ $request->lokasiAwal->alamat }}
                    </p>
                </div>
            </div>

            <div class="flex gap-4">
                <span class="text-2xl">🗺️</span>
                <div>
                    <p class="text-sm text-gray-400">Tujuan</p>
                    <h3 class="font-bold text-gray-900">
                        {{ $request->lokasiTujuan->nama_lokasi }}
                    </h3>
                    <p class="text-sm text-gray-400">
                        {{ $request->lokasiTujuan->alamat }}
                    </p>
                </div>
            </div>

            <div class="flex gap-4">
                <span class="text-2xl">🛒</span>
                <div>
                    <p class="text-sm text-gray-400">
                        Deskripsi
                    </p>
                    <h3 class="font-bold text-gray-900">
                        {{ $request->deskripsi_barang }}
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">
                <span class="text-2xl">💰</span>
                <div>
                    <p class="text-sm text-gray-400">
                        Estimasi Tip (Rp)
                    </p>
                    <h3 class="font-bold text-gray-900">
                        {{ number_format($request->nominal_tip, 0, ',', '.') }}
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">
                <span class="text-2xl">📌</span>
                <div>
                    <p class="text-sm text-gray-400">
                        Jarak
                    </p>
                    <h3 class="font-bold text-gray-900">
                        3,2 km
                    </h3>
                </div>
            </div>

        </div>

        <!-- DIVIDER -->
        <div class="border-t border-gray-200 my-8"></div>

        <!-- PEMOHON -->
        <div class="flex items-center gap-4 mb-8">

            <img
                src="https://i.pravatar.cc/100?img=5"
                class="w-16 h-16 rounded-full object-cover"
            >

            <div>

                <p class="text-sm text-gray-400">
                    Pemohon
                </p>

                <h3 class="font-bold text-gray-900 text-lg">
                    {{ $request->pemohon->nama_lengkap }}
                </h3>

                <div class="flex items-center gap-2 mt-1">
                    <span>⭐</span>

                    <span class="font-semibold text-gray-800">
                        {{ number_format($avgRating, 1) }}
                    </span>
                </div>

            </div>

        </div>

        <!-- ACTION BUTTON -->
        <div class="grid grid-cols-2 gap-4 mb-4">

            <a
                href="{{ route('chat.show', $conversation->id) }}"
                class="border border-[#7C3AED]
                text-[#7C3AED]
                font-bold py-4 rounded-2xl
                text-center"
            >
                Chat
            </a>

            <a
                href="{{ route('track.lokasi', $request->id) }}"
                class="border border-[#7C3AED]
                text-[#7C3AED]
                font-bold py-4 rounded-2xl
                text-center"
            >
                Navigasi
            </a>

        </div>

        <form
            action="{{ route('request.finish', $request->id) }}"
            method="POST"
        >
            @csrf

            <button
                type="submit"
                class="w-full py-4 rounded-2xl
                text-white font-bold
                bg-gradient-to-r
                from-[#7C3AED]
                to-[#60A5FA]
                shadow-lg"
            >
                Selesaikan Request
            </button>
        </form>

    </div>

</body>
</html>