<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Request</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

<div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto">

    <div class="px-6 pt-12 pb-8">

        {{-- Header --}}
        <div class="flex items-center mb-8">

            <a
                href="{{ route('riwayat') }}"
                class="text-2xl text-gray-700"
            >
                ←
            </a>

            <h1 class="flex-1 text-center text-3xl font-extrabold text-[#111827]">
                Detail Request
            </h1>

        </div>

        {{-- Card Request --}}
        <div class="bg-white rounded-3xl p-4 shadow-sm mb-8">

            <div class="flex justify-between">

                <div class="flex gap-4">

                    <div
                        class="w-16 h-16 rounded-2xl
                        bg-gray-100 flex items-center justify-center text-3xl">
                        📦
                    </div>

                    <div>

                        <h3 class="font-bold text-gray-900">
                            {{ $request->deskripsi_barang }}
                        </h3>

                        <p class="text-sm text-gray-400">
                            Request ID #{{ $request->id }}
                        </p>

                    </div>

                </div>

                <span
                    class="h-fit px-3 py-1 rounded-full
                    bg-blue-100 text-blue-600 text-xs font-semibold">

                    Diproses

                </span>

            </div>

        </div>

        {{-- Detail --}}
        <div class="space-y-6">

            <div>
                <p class="text-sm text-gray-400">Jenis Titipan</p>
                <h4 class="font-semibold">
                    {{ $request->kategori?->nama_kategori }}
                </h4>
            </div>

            <div>
                <p class="text-sm text-gray-400">Dari</p>
                <h4 class="font-semibold">
                    {{ $request->lokasiAwal?->nama_lokasi }}
                </h4>
            </div>

            <div>
                <p class="text-sm text-gray-400">Tujuan</p>
                <h4 class="font-semibold">
                    {{ $request->lokasiTujuan?->nama_lokasi }}
                </h4>
            </div>

            <div>
                <p class="text-sm text-gray-400">Deskripsi</p>
                <h4 class="font-semibold">
                    {{ $request->deskripsi_barang }}
                </h4>
            </div>

            <div>
                <p class="text-sm text-gray-400">
                    Estimasi Tip (Rp)
                </p>

                <h4 class="font-semibold">
                    Rp {{ number_format($request->nominal_tip,0,',','.') }}
                </h4>
            </div>

        </div>

        {{-- Helper --}}
        <div class="border-t border-gray-200 my-8"></div>

        <div class="flex items-center gap-4 mb-8">

            <div
                class="w-16 h-16 rounded-full
                bg-purple-500 text-white
                flex items-center justify-center">

                {{ strtoupper(substr($request->runner?->nama_lengkap ?? 'H',0,1)) }}

            </div>

            <div>

                <p class="text-sm text-gray-400">
                    Helper
                </p>

                <h3 class="font-bold text-gray-900">
                    {{ $request->runner?->nama_lengkap }}
                </h3>

                <p class="text-sm text-gray-500">
                    ⭐ 4.9
                </p>

            </div>

        </div>

        <div class="border-t border-gray-200 mb-8"></div>

        {{-- Button Chat --}}
        @if($request->conversation)

        <a
            href="{{ route('chat.show', $request->conversation->id) }}"
            class="block w-full text-center
            border border-[#7C3AED]
            text-[#7C3AED]
            font-semibold py-3 rounded-xl mb-4">

            Chat

        </a>

        @endif

        {{-- Button Track --}}
        <a
            href="{{ route('track.lokasi', $request->id) }}"
            class="block w-full text-center
            border border-[#7C3AED]
            text-[#7C3AED]
            font-semibold py-3 rounded-xl">

            Lacak Lokasi

        </a>

    </div>

</div>

</body>
</html>