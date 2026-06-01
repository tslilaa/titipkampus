<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TitipKampus</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<!-- DASHBOARD -->
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-4">
    
    <!-- PHONE -->
    <div
        style="max-width:420px;"
        class="phone-container
        w-full
        h-[95vh]
        bg-[#FAFAFA]
        relative
        overflow-hidden
        rounded-[3rem]
        shadow-2xl
        px-6
        pt-14
        pb-8
        flex
        flex-col">

        @include('components.sidebar')
        
        <!-- TOPBAR -->
        <div class="flex items-center justify-between mb-8">

            <!-- MENU -->
            <button
                onclick="openSidebar()"
                class="text-gray-500">

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

            <!-- NOTIF -->
            <a href="/notifikasi"
            class="text-gray-500 relative block">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-7 h-7"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11
                        a6.002 6.002 0 00-4-5.659V5
                        a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159
                        c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1
                        a3 3 0 11-6 0v-1m6 0H9" />
                </svg>

                <!-- RED DOT -->
                <span class="absolute top-0 right-0
                            w-2.5 h-2.5
                            bg-red-500
                            rounded-full
                            border-2 border-[#FAFAFA]">
                </span>

            </a>

        </div>

        <!-- HEADER -->
        <!-- CONTENT SCROLL -->
        <div class="flex-1 overflow-y-auto pr-1">
            <div class="flex items-center justify-between mb-8 shrink-0">

                <div>

                    <h1 class="text-[30px] font-extrabold text-slate-900 leading-[1.1] tracking-[-0.5px]">
                        Halo, Alisha
                    </h1>

                    <p class="text-gray-500 text-[14px] mt-1">
                        Mau nitip apa hari ini?
                    </p>

                </div>

                <!-- PROFILE -->
                <img 
                    src="https://i.pravatar.cc/100"
                    alt="Profile"
                    class="w-14 h-14 rounded-full object-cover border-4 border-white shadow-md"
                >

            </div>

        <!-- STATS -->
        <div class="grid grid-cols-2 gap-4 mb-7">

            <!-- CARD -->
            <div class="bg-gradient-to-br from-[#7C3AED] to-[#A78BFA] rounded-[28px] px-5 py-4 p-5 text-white shadow-[0_8px_24px_rgba(0,0,0,0.08)]">

                <h2 class="text-[42px] font-bold leading-none">
                    12
                </h2>

                <p class="text-[14px] mt-2 text-white/80">
                    Total Request
                </p>

            </div>

            <div class="bg-gradient-to-br from-[#F59E0B] to-[#FDBA74] rounded-3xl p-5 text-white shadow-lg">

                <h2 class="text-4xl font-bold">
                    5
                </h2>

                <p class="text-sm mt-1 opacity-90">
                    Menunggu
                </p>

            </div>

            <div class="bg-gradient-to-br from-[#3B82F6] to-[#60A5FA] rounded-3xl p-5 text-white shadow-lg">

                <h2 class="text-4xl font-bold">
                    3
                </h2>

                <p class="text-sm mt-1 opacity-90">
                    Diproses
                </p>

            </div>

            <div class="bg-gradient-to-br from-[#00C853] to-[#69F0AE] rounded-3xl p-5 text-white shadow-lg">

                <h2 class="text-4xl font-bold">
                    4
                </h2>

                <p class="text-sm mt-1 opacity-90">
                    Selesai
                </p>

            </div>

        </div>

        <!-- RINGKASAN -->
        <div class="bg-white
                    rounded-[32px]
                    p-6
                    border border-slate-100
                    shadow-[0_10px_30px_rgba(15,23,42,0.05)]
                    mb-7">

            <h2 class="text-[20px]
                    font-bold
                    tracking-[-0.4px]
                    text-slate-900
                    mb-5">

                Ringkasan Aktivitas
            </h2>

            <div class="space-y-4">

                <!-- MENUNGGU -->
                <a href="/detail-request"
                class="flex items-center justify-between
                        rounded-[24px]
                        px-3 py-3
                        hover:bg-slate-50
                        transition duration-200">

                    <div class="flex items-center gap-4">

                        <div class="w-[52px] h-[52px]
                                    rounded-[18px]
                                    bg-gradient-to-br
                                    from-pink-500
                                    to-pink-400
                                    flex items-center justify-center
                                    shadow-[0_8px_20px_rgba(236,72,153,0.25)]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2.2"
                                stroke="currentColor"
                                class="w-6 h-6 text-white">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.992 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865A8.25 8.25 0 0117.834 6.165l3.181 3.182"/>
                            </svg>

                        </div>

                        <div>

                            <h3 class="font-semibold text-slate-800 text-[18px]">
                                Menunggu Pengambilan
                            </h3>

                            <p class="text-[14px] text-slate-500 mt-0.5">
                                2 paket siap diambil
                            </p>

                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-5 h-5 text-slate-300">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"/>
                    </svg>
                </a>


                <!-- DALAM PERJALANAN -->
                <a href="/track-lokasi"
                class="flex items-center justify-between
                        rounded-[24px]
                        px-3 py-3
                        hover:bg-slate-50
                        transition duration-200">

                    <div class="flex items-center gap-4">

                        <div class="w-[52px] h-[52px]
                                    rounded-[18px]
                                    bg-gradient-to-br
                                    from-violet-500
                                    to-indigo-500
                                    flex items-center justify-center
                                    shadow-[0_8px_20px_rgba(124,58,237,0.25)]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2.2"
                                stroke="currentColor"
                                class="w-6 h-6 text-white">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 21s6-4.35 6-10a6 6 0 10-12 0c0 5.65 6 10 6 10z"/>

                                <circle cx="12"
                                        cy="11"
                                        r="2.5"
                                        fill="currentColor"/>
                            </svg>
                        </div>

                        <div>

                            <h3 class="font-semibold text-slate-800 text-[18px]">
                                Dalam Perjalanan
                            </h3>

                            <p class="text-[14px] text-slate-500 mt-0.5">
                                1 paket sedang diantarkan
                            </p>

                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-5 h-5 text-slate-300">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"/>
                    </svg>
                </a>


                <!-- SELESAI -->
                <a href="/riwayat"
                class="flex items-center justify-between
                        rounded-[24px]
                        px-3 py-3
                        hover:bg-slate-50
                        transition duration-200">

                    <div class="flex items-center gap-4">

                        <div class="w-[52px] h-[52px]
                                    rounded-[18px]
                                    bg-gradient-to-br
                                    from-emerald-500
                                    to-green-400
                                    flex items-center justify-center
                                    shadow-[0_8px_20px_rgba(16,185,129,0.25)]">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2.5"
                                stroke="currentColor"
                                class="w-6 h-6 text-white">

                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M5 13l4 4L19 7"/>
                            </svg>

                        </div>

                        <div>

                            <h3 class="font-semibold text-slate-800 text-[18px]">
                                Selesai Minggu Ini
                            </h3>

                            <p class="text-[14px] text-slate-500 mt-0.5">
                                3 request selesai
                            </p>

                        </div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-5 h-5 text-slate-300">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m9 18 6-6-6-6"/>
                    </svg>
                </a>

            </div>

        </div>

        <!-- MENU -->
        <div class="mb-8">

            <h2 class="text-2xl font-bold text-gray-900 mb-5">
                Menu Request
            </h2>

            <div class="grid grid-cols-4 gap-4 text-center">

            <!-- BUAT REQUEST -->
            <a href="/request"
            class="flex flex-col items-center group">

                <div class="w-14 h-14 rounded-[20px]
                            bg-gradient-to-br
                            from-[#7C3AED]
                            to-[#60A5FA]
                            flex items-center justify-center
                            shadow-[0_8px_24px_rgba(124,58,237,0.25)]
                            transition duration-200
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.4"
                        stroke="currentColor"
                        class="w-7 h-7 text-white">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>

                </div>

                <p class="text-[11px] text-gray-700 mt-3 leading-tight text-center">
                    Buat Request Baru
                </p>
            </a>


            <!-- DAFTAR REQUEST -->
            <a href="/daftar-request"
            class="flex flex-col items-center group">

                <div class="w-14 h-14 rounded-[20px]
                            bg-gradient-to-br
                            from-[#7C3AED]
                            to-[#60A5FA]
                            flex items-center justify-center
                            shadow-[0_8px_24px_rgba(124,58,237,0.25)]
                            transition duration-200
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-7 h-7 text-white">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 6.75h12m-12 5.25h12m-12 5.25h12M3.75 6.75h.008v.008H3.75zm0 5.25h.008v.008H3.75zm0 5.25h.008v.008H3.75z"/>
                    </svg>

                </div>

                <p class="text-[11px] text-gray-700 mt-3 leading-tight text-center">
                    Daftar Request
                </p>
            </a>


            <!-- MENUNGGU PENGAMBILAN -->
            <a href="/detail-request"
            class="flex flex-col items-center group">

                <div class="w-14 h-14 rounded-[20px]
                            bg-gradient-to-br
                            from-[#7C3AED]
                            to-[#60A5FA]
                            flex items-center justify-center
                            shadow-[0_8px_24px_rgba(236,72,153,0.25)]
                            transition duration-200
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-7 h-7 text-white">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.992 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865A8.25 8.25 0 0117.834 6.165l3.181 3.182"/>
                    </svg>

                </div>

                <p class="text-[11px] text-gray-700 mt-3 leading-tight text-center">
                    Menunggu Pengambilan
                </p>
            </a>


            <!-- RIWAYAT -->
            <a href="/riwayat"
            class="flex flex-col items-center group">

                <div class="w-14 h-14 rounded-[20px]
                            bg-gradient-to-br
                            from-[#7C3AED]
                            to-[#60A5FA]
                            flex items-center justify-center
                            shadow-[0_8px_24px_rgba(124,58,237,0.25)]
                            transition duration-200
                            group-hover:scale-105">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-7 h-7 text-white">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 6v6l4 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                </div>

                <p class="text-[11px] text-gray-700 mt-3 leading-tight text-center">
                    Riwayat Request
                </p>
            </a>

        </div>

        </div>

        </div>

    </div>

</body>

</html>