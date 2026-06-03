<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Request</title>

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
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10 relative">

        <!-- HEADER -->
        <div class="flex items-center mb-8">

            <a href="javascript:history.back()"
                class="text-gray-700 text-2xl mr-4">
                ←
            </a>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Detail Request
            </h1>
        </div>

        <!-- CARD REQUEST -->
        <div class="flex justify-between items-start bg-white rounded-3xl p-4 shadow-sm border border-gray-100 mb-8">

            <div class="flex gap-4">

                <!-- Image -->
                <img
                    src="https://cdn-icons-png.flaticon.com/512/5787/5787016.png"
                    class="w-16 h-16 rounded-2xl object-cover"
                >

                <!-- Text -->
                <div>

                    <h2 class="font-bold text-gray-900 text-lg">
                        {{ $request->deskripsi_barang }}
                    </h2>

                    <p class="text-sm text-gray-400 mt-1">
                        Request ID: #{{ str_pad($request->id, 3, '0', STR_PAD_LEFT) }}
                    </p>

                    <p class="text-xs text-gray-400 mt-2">
                        {{ $request->created_at->diffForHumans() }}
                    </p>

                </div>
            </div>

            <!-- Status -->
             @php
                $statusMap = [

                    'Pending' => [
                        'label' => 'Menunggu',
                        'class' => 'bg-orange-100 text-orange-500'
                    ],

                    'Taken' => [
                        'label' => 'Diproses',
                        'class' => 'bg-blue-100 text-blue-500'
                    ],

                    'Done' => [
                        'label' => 'Selesai',
                        'class' => 'bg-green-100 text-green-600'
                    ],

                ];

                $status = $statusMap[$request->status] ?? [
                    'label' => $request->status,
                    'class' => 'bg-gray-100 text-gray-500'
                ];

            @endphp
            <span class="{{ $status['class'] }}
                px-4 py-2 rounded-xl
                text-sm font-semibold">

                {{ $status['label'] }}
            </span>

        </div>

        <!-- DETAIL -->
        <div class="space-y-7">

            <!-- ITEM -->
            <div class="flex gap-4">

                <span class="text-2xl">👜</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Jenis Titipan
                    </p>

                    <h3 class="font-bold text-gray-900">
                        {{ $request->kategori->nama_kategori }}
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">📍</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Dari
                    </p>

                    <h3 class="font-bold text-gray-900">
                        {{ $request->lokasiAwal->nama_lokasi }}
                    </h3>

                    <p class="text-sm text-gray-400">
                        {{ $request->lokasiAwal->alamat }}
                    </p>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">🗺️</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Tujuan
                    </p>

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
                        Rp {{ number_format($request->nominal_tip,0,',','.') }}
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

        <!-- ACTION SECTION -->
        <div class="mt-14">

            @if($request->status === 'Pending')

                <form
                    action="{{ route('request.cancel', $request->id) }}"
                    method="POST"
                    onsubmit="return confirm('Batalkan request ini?')"
                >

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="w-full border-2 border-red-500
                        text-red-500 py-4 rounded-2xl
                        font-bold hover:bg-red-500
                        hover:text-white transition"
                    >
                        Batalkan Request
                    </button>

                </form>

            @elseif($request->status === 'Taken')

                <!-- DIVIDER -->
                <div class="border-t border-gray-200 mb-8"></div>

                <!-- HELPER -->
                <div class="flex items-center gap-4 mb-8">

                    <img
                        src="https://i.pravatar.cc/100?img=5"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <p class="text-sm text-gray-400">
                            Helper
                        </p>

                        <h3 class="font-bold text-gray-900 text-lg">
                            {{ $request->runner?->nama_lengkap ?? 'Helper' }}
                        </h3>

                        <p class="text-sm text-gray-400">
                            Sedang membantu request kamu
                        </p>

                    </div>

                </div>

                <!-- ACTION BUTTON -->
                <div class="grid grid-cols-2 gap-4 mb-4">

                    <a
                        href="{{ route('chat.index') }}"
                        class="border border-[#7C3AED]
                        text-[#7C3AED]
                        font-bold py-4 rounded-2xl
                        text-center"
                    >
                        Chat
                    </a>

                    <a
                        href="/track-lokasi"
                        class="border border-[#7C3AED]
                        text-[#7C3AED]
                        font-bold py-4 rounded-2xl
                        text-center"
                    >
                        Navigasi
                    </a>

                </div>

                <button
                    class="w-full py-4 rounded-2xl
                    text-white font-bold
                    bg-gradient-to-r
                    from-[#7C3AED]
                    to-[#60A5FA]
                    shadow-lg"
                >
                    Selesaikan Request
                </button>

            @elseif($request->status === 'Done')

                <a
                    href="/rating/{{ $request->id }}"
                    class="block w-full py-4 rounded-2xl
                    text-center text-white font-bold
                    bg-gradient-to-r
                    from-[#7C3AED]
                    to-[#60A5FA]"
                >
                    Beri Penilaian
                </a>

            @endif

        </div>

    </div>

</body>
</html>