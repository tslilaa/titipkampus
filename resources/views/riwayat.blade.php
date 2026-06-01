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
                <button class="px-6 py-2.5 rounded-full
                               bg-gradient-to-r
                               from-[#7C3AED]
                               to-[#60A5FA]
                               text-white text-sm font-semibold whitespace-nowrap shadow-[0_4px_12px_rgba(124,58,237,0.25)]">
                    Semua
                </button>

                <button class="px-6 py-2.5 rounded-full
                               bg-gray-100 hover:bg-gray-200 text-gray-500
                               text-sm font-semibold whitespace-nowrap transition-colors">
                    Selesai
                </button>

                <button class="px-6 py-2.5 rounded-full
                               bg-gray-100 hover:bg-gray-200 text-gray-500
                               text-sm font-semibold whitespace-nowrap transition-colors">
                    Dibatalkan
                </button>
            </div>

        </div>

        <!-- LIST -->
        <div class="flex-1 overflow-y-auto px-6 py-6 space-y-4">

            <!-- ITEM 1 -->
            <div class="bg-white rounded-[24px] p-4 shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 transition hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] cursor-pointer">
                <div class="flex gap-4">
                    <div class="w-16 h-16 rounded-[18px] bg-orange-50 flex items-center justify-center text-orange-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 0 0 3.75-.615A2.999 2.999 0 0 0 9.75 9.75c.896 0 1.7-.393 2.25-1.016a2.999 2.999 0 0 0 2.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 0 0 3.75.614m-16.5 0a3.004 3.004 0 0 1-.621-4.72L4.318 3.44A1.5 1.5 0 0 1 5.378 3h13.243a1.5 1.5 0 0 1 1.06.44l1.19 1.189a3 3 0 0 1-.621 4.72m-13.5 8.65h3.75a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H6.75a.75.75 0 0 0-.75.75v3.75c0 .415.336.75.75.75Z" />
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-bold text-slate-800 text-[16px] truncate pr-2">
                                Titip Nasi Goreng
                            </h3>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold bg-green-50 text-green-600 shrink-0">
                                Selesai
                            </span>
                        </div>
                        <h4 class="font-semibold text-[#7C3AED] text-[14px]">
                            Rp 22.000
                        </h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-[12px] text-slate-500 font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                Justin
                            </p>
                            <p class="text-[11px] text-gray-400">
                                11 Mei 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="bg-white rounded-[24px] p-4 shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 transition hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] cursor-pointer">
                <div class="flex gap-4">
                    <div class="w-16 h-16 rounded-[18px] bg-blue-50 flex items-center justify-center text-blue-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-bold text-slate-800 text-[16px] truncate pr-2">
                                Ambil Laundry
                            </h3>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold bg-red-50 text-red-500 shrink-0">
                                Dibatalkan
                            </span>
                        </div>
                        <h4 class="font-semibold text-[#7C3AED] text-[14px]">
                            Rp 10.000
                        </h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-[12px] text-slate-500 font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                Mark
                            </p>
                            <p class="text-[11px] text-gray-400">
                                11 Mei 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="bg-white rounded-[24px] p-4 shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 transition hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] cursor-pointer">
                <div class="flex gap-4">
                    <div class="w-16 h-16 rounded-[18px] bg-slate-100 flex items-center justify-center text-slate-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-bold text-slate-800 text-[16px] truncate pr-2">
                                Ambil Laptop
                            </h3>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold bg-green-50 text-green-600 shrink-0">
                                Selesai
                            </span>
                        </div>
                        <h4 class="font-semibold text-[#7C3AED] text-[14px]">
                            Rp 5.000
                        </h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-[12px] text-slate-500 font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                Mark
                            </p>
                            <p class="text-[11px] text-gray-400">
                                10 Mei 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="bg-white rounded-[24px] p-4 shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 transition hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] cursor-pointer">
                <div class="flex gap-4">
                    <div class="w-16 h-16 rounded-[18px] bg-emerald-50 flex items-center justify-center text-emerald-500 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                        </svg>
                    </div>

                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="font-bold text-slate-800 text-[16px] truncate pr-2">
                                Titip Es Teh
                            </h3>
                            <span class="px-2.5 py-1 rounded-lg text-[10px] font-bold bg-green-50 text-green-600 shrink-0">
                                Selesai
                            </span>
                        </div>
                        <h4 class="font-semibold text-[#7C3AED] text-[14px]">
                            Rp 7.000
                        </h4>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-[12px] text-slate-500 font-medium flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                Mingyu
                            </p>
                            <p class="text-[11px] text-gray-400">
                                09 Mei 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>