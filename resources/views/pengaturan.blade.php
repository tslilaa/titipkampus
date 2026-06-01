<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Pengaturan</title>

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
    <div class="px-6 pt-14 pb-6 bg-white/80 backdrop-blur-md sticky top-0 z-10 border-b border-gray-100">

        <div class="flex items-center gap-4">
            <button onclick="openSidebar()" class="text-gray-500 hover:text-gray-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <h1 class="text-[30px] font-extrabold text-slate-900 leading-[1.1] tracking-[-0.5px]">
                Pengaturan
            </h1>
        </div>
        <p class="text-gray-500 text-[14px] mt-2 ml-11">
            Atur preferensi aplikasi Anda
        </p>

    </div>

    <!-- CONTENT -->
    <div class="flex-1 overflow-y-auto px-6 py-6">

        <div class="space-y-4">

            <!-- ITEM 1 -->
            <button class="w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50
                           px-5 py-4 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition group">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-violet-50 flex items-center justify-center text-[#7C3AED] group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-slate-700 text-[15px]">Pengaturan Notifikasi</h3>
                        <p class="text-[12px] text-gray-400">Atur nada dan push notif</p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </button>

            <!-- ITEM 2 -->
            <button class="w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50
                           px-5 py-4 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition group">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-slate-700 text-[15px]">Privasi & Keamanan</h3>
                        <p class="text-[12px] text-gray-400">Ubah PIN dan Face ID</p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </button>

            <!-- ITEM 3 -->
            <button class="w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50
                           px-5 py-4 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition group">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-slate-700 text-[15px]">Bahasa</h3>
                        <p class="text-[12px] text-gray-400">Pilih bahasa aplikasi</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <span class="text-slate-600 font-semibold text-[13px] bg-slate-100 px-3 py-1 rounded-lg">
                        ID
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-300">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </div>

            </button>

            <!-- ITEM 4 -->
            <button class="w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50
                           px-5 py-4 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition group">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 flex items-center justify-center text-orange-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-slate-700 text-[15px]">Tentang Aplikasi</h3>
                        <p class="text-[12px] text-gray-400">Versi, Syarat & Ketentuan</p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </button>

            <!-- ITEM 5 -->
            <button class="w-full bg-white rounded-[24px] shadow-[0_10px_30px_rgba(15,23,42,0.04)] border border-slate-50
                           px-5 py-4 flex items-center justify-between hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition group">

                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-pink-50 flex items-center justify-center text-pink-500 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h3 class="font-bold text-slate-700 text-[15px]">Bantuan & FAQ</h3>
                        <p class="text-[12px] text-gray-400">Pusat bantuan pengguna</p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-300">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>

            </button>

        </div>
        
        <!-- LOGOUT BUTTON -->
        <div class="mt-8 mb-4 px-2">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-500 font-bold py-4 rounded-[20px] transition-colors flex justify-center items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                    Keluar Akun
                </button>
            </form>
        </div>

    </div>

</div>

</body>
</html>