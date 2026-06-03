<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Riwayat</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="w-full max-w-[420px]
                h-[95vh]
                bg-[#FAFAFA]
                rounded-[3rem]
                shadow-2xl
                relative
                overflow-hidden
                flex flex-col">

        @include('components.sidebar')

        <!-- HEADER -->
        <div class="px-6 pt-14 pb-4 bg-white/80 backdrop-blur-md sticky top-0 z-10 border-b border-gray-100">
            
            <div class="flex items-center justify-between mb-6">
                <!-- MENU -->
                <button
                    onclick="openSidebar()"
                    class="text-gray-500 hover:text-gray-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-7 h-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <h1 class="text-[30px] font-extrabold text-slate-900 leading-[1.1] tracking-[-0.5px] mb-6">
                Riwayat Request
            </h1>

            <!-- TAB -->
            <div class="flex gap-3 overflow-x-auto hide-scrollbar pb-2">
                <a href="{{ route('riwayat') }}" class="px-6 py-2.5 rounded-full {{ !$statusFilter ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white shadow-[0_4px_12px_rgba(124,58,237,0.25)]' : 'bg-gray-100 hover:bg-gray-200 text-gray-500' }} text-sm font-semibold whitespace-nowrap transition-colors">
                    Semua
                </a>

                <a href="{{ route('riwayat', ['status' => 'diproses']) }}" class="px-6 py-2.5 rounded-full {{ $statusFilter == 'diproses' ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white shadow-[0_4px_12px_rgba(124,58,237,0.25)]' : 'bg-gray-100 hover:bg-gray-200 text-gray-500' }} text-sm font-semibold whitespace-nowrap transition-colors">
                    Diproses
                </a>

                <a href="{{ route('riwayat', ['status' => 'selesai']) }}" class="px-6 py-2.5 rounded-full {{ $statusFilter == 'selesai' ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white shadow-[0_4px_12px_rgba(124,58,237,0.25)]' : 'bg-gray-100 hover:bg-gray-200 text-gray-500' }} text-sm font-semibold whitespace-nowrap transition-colors">
                    Selesai
                </a>

                <a href="{{ route('riwayat', ['status' => 'dibatalkan']) }}" class="px-6 py-2.5 rounded-full {{ $statusFilter == 'dibatalkan' ? 'bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white shadow-[0_4px_12px_rgba(124,58,237,0.25)]' : 'bg-gray-100 hover:bg-gray-200 text-gray-500' }} text-sm font-semibold whitespace-nowrap transition-colors">
                    Dibatalkan
                </a>
            </div>

        </div>

        <!-- LIST -->
        <div class="flex-1 overflow-y-auto px-6 py-6 space-y-4">

            @forelse($requests as $req)

            @if($req->status == 'Taken')

            <a
                href="{{ route('request.process', $req->id) }}"
                class="block bg-white rounded-[24px] p-4 shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 transition hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)]"
            >

            @else
                <div class="flex gap-4">
                    <div class="w-16 h-16 rounded-[18px] bg-slate-100 flex items-center justify-center text-slate-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-bold text-slate-800 text-[16px] truncate pr-2">
                                {{ $req->deskripsi_barang }}
                            </h3>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold shrink-0
                                @if($req->status == 'Done') bg-green-50 text-green-600
                                @elseif($req->status == 'Canceled') bg-red-50 text-red-500
                                @else bg-orange-50 text-orange-500 @endif">
                                {{ $req->status }}
                            </span>
                        </div>
                        <h4 class="font-semibold text-[#7C3AED] text-[14px]">
                            Rp {{ number_format($req->nominal_tip, 0, ',', '.') }}
                        </h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-[12px] text-slate-500 font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                {{ $req->runner ? $req->runner->nama_lengkap : 'Belum ada helper' }}
                            </p>
                            <p class="text-[11px] text-gray-400">
                                {{ $req->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </a>
            @empty
            <div class="text-center py-10">
                <p class="text-gray-400 text-sm">Belum ada riwayat request.</p>
            </div>
            @endforelse

        </div>
    </div>

</body>
</html>