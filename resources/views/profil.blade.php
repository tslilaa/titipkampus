<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

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
    <div class="bg-gradient-to-br
                from-[#7C3AED]
                to-[#A78BFA]
                rounded-b-[3rem]
                px-6
                pt-14
                pb-20
                text-white
                shadow-[0_10px_30px_rgba(124,58,237,0.2)]">

        <!-- TOPBAR -->
        <div class="flex justify-between items-center relative z-10">
            <button onclick="openSidebar()" class="hover:text-white/80 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-7 h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <h1 class="font-bold text-xl tracking-wide">
                Profil
            </h1>
            
            <div class="w-7"></div> <!-- Spacer for centering -->
        </div>

        <!-- PROFILE -->
        <div class="flex flex-col items-center mt-10 relative z-10">
            <div class="relative">
                <img
                    src="{{ $user->foto_profil ? asset('storage/'.$user->foto_profil) : 'https://ui-avatars.com/api/?name='.urlencode($user->nama_lengkap).'&background=7C3AED&color=fff' }}"
                    class="w-28 h-28 rounded-full
                           border-4
                           border-white
                           object-cover shadow-xl">

                <!-- CAMERA -->
                <button
                    class="absolute bottom-0 right-0
                           w-9 h-9 rounded-full
                           bg-white text-[#7C3AED]
                           flex items-center justify-center
                           shadow-lg hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                    </svg>
                </button>
            </div>

            <h2 class="text-[28px] font-extrabold mt-5 leading-none tracking-tight">
                {{ $user->nama_lengkap }}
            </h2>

            <p class="text-white/80 mt-1 text-[14px] font-medium">
                {{ $user->nim }}
            </p>
        </div>
        
        <!-- Background decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden rounded-b-[3rem] pointer-events-none">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute bottom-10 -left-10 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="flex-1 overflow-y-auto px-6 pb-10 -mt-10 z-20">

        <!-- STATS -->
        <div class="bg-white
                    rounded-[24px]
                    shadow-[0_10px_30px_rgba(15,23,42,0.08)]
                    border border-slate-50
                    px-6 py-6
                    mb-6">

            <div class="grid grid-cols-3 divide-x divide-gray-100 text-center">
                <div>
                    <h2 class="text-[28px] font-bold text-slate-800 leading-none">{{ $totalRequest }}</h2>
                    <p class="text-gray-400 text-[11px] font-medium mt-1">Request</p>
                </div>
                <div>
                    <h2 class="text-[28px] font-bold text-slate-800 leading-none">{{ $averageRating }}</h2>
                    <p class="text-gray-400 text-[11px] font-medium mt-1">Rating</p>
                </div>
                <div>
                    <h2 class="text-[28px] font-bold text-slate-800 leading-none">{{ $totalReviews }}</h2>
                    <p class="text-gray-400 text-[11px] font-medium mt-1">Ulasan</p>
                </div>
            </div>
        </div>

        <!-- INFO -->
        <div class="bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 overflow-hidden mb-6">
            
            <div class="flex justify-between items-center p-4 mx-2 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-[14px]">Email Kampus</span>
                </div>
                <span class="text-[12px] text-gray-500 font-medium">{{ $user->email_kampus }}</span>
            </div>

            <div class="flex justify-between items-center p-4 mx-2 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center text-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-[14px]">Nomor WA</span>
                </div>
                <span class="text-[12px] text-gray-500 font-medium">{{ $user->nomor_whatsapp }}</span>
            </div>

            <div class="flex justify-between items-center p-4 mx-2 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center text-orange-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-[14px]">Fakultas</span>
                </div>
                <span class="text-[12px] text-gray-500 font-medium">-</span>
            </div>

            <div class="flex justify-between items-center p-4 mx-2">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center text-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-slate-700 text-[14px]">NIM</span>
                </div>
                <span class="text-[12px] text-gray-500 font-medium">{{ $user->nim }}</span>
            </div>

        </div>

        <!-- MENU -->
        <div class="bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50 overflow-hidden">
            
            <button class="w-full p-4 mx-2 border-b border-gray-100 flex justify-between items-center hover:bg-slate-50 transition">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <span class="font-semibold text-slate-700 text-[14px]">Ubah Password</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 mr-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <button class="w-full p-4 mx-2 border-b border-gray-100 flex justify-between items-center hover:bg-slate-50 transition">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <span class="font-semibold text-slate-700 text-[14px]">Alamat Tersimpan</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 mr-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <button class="w-full p-4 mx-2 border-b border-gray-100 flex justify-between items-center hover:bg-slate-50 transition">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                    <span class="font-semibold text-slate-700 text-[14px]">Metode Pembayaran</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 mr-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <button class="w-full p-4 mx-2 flex justify-between items-center hover:bg-slate-50 transition">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                    <span class="font-semibold text-slate-700 text-[14px]">Bantuan & FAQ</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-300 mr-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

        </div>

    </div>

</div>

</body>
</html>