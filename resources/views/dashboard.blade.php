<!-- DASHBOARD -->
<body class="bg-gray-100 flex items-center justify-center min-h-screen overflow-hidden">

    <!-- PHONE -->
    <div class="w-full sm:max-w-[420px] h-[100dvh] sm:h-[850px] bg-[#FAFAFA] relative overflow-hidden sm:rounded-[3rem] sm:shadow-2xl px-6 pt-14 pb-8 flex flex-col">

        <!-- TOPBAR -->
        <div class="flex items-center justify-between mb-8">

            <!-- MENU -->
            <button class="text-gray-500">
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
            <button class="text-gray-500 relative">

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

                <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>

            </button>

        </div>

        <!-- HEADER -->
        <div class="flex items-center justify-between mb-8">

            <div>

                <h1 class="text-[32px] font-extrabold text-gray-900 leading-tight">
                    Halo, Alisha 👋
                </h1>

                <p class="text-gray-500 text-sm mt-1">
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
            <div class="bg-gradient-to-br from-[#7C3AED] to-[#A78BFA] rounded-3xl p-5 text-white shadow-lg">

                <h2 class="text-4xl font-bold">
                    12
                </h2>

                <p class="text-sm mt-1 opacity-90">
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
        <div class="bg-[#F4F4F6] rounded-[2rem] p-5 shadow-lg shadow-purple-200/40 mb-7">

            <h2 class="text-2xl font-bold text-gray-900 mb-5">
                Ringkasan Aktivitas
            </h2>

            <!-- ITEM -->
            <div class="space-y-5">

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-pink-500 flex items-center justify-center text-white text-xl shadow-md">
                            ↻
                        </div>

                        <div>
                            <h3 class="font-bold text-gray-800">
                                Menunggu Pengambilan
                            </h3>

                            <p class="text-sm text-gray-500">
                                2 paket siap diambil
                            </p>
                        </div>

                    </div>

                    <span class="text-gray-400 text-2xl">
                        ›
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-purple-500 flex items-center justify-center text-white text-xl shadow-md">
                            📍
                        </div>

                        <div>
                            <h3 class="font-bold text-gray-800">
                                Dalam Perjalanan
                            </h3>

                            <p class="text-sm text-gray-500">
                                1 paket sedang diantarkan
                            </p>
                        </div>

                    </div>

                    <span class="text-gray-400 text-2xl">
                        ›
                    </span>

                </div>

                <div class="flex items-center justify-between">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-2xl bg-emerald-500 flex items-center justify-center text-white text-xl shadow-md">
                            ✓
                        </div>

                        <div>
                            <h3 class="font-bold text-gray-800">
                                Selesai Minggu ini
                            </h3>

                            <p class="text-sm text-gray-500">
                                3 request selesai
                            </p>
                        </div>

                    </div>

                    <span class="text-gray-400 text-2xl">
                        ›
                    </span>

                </div>

            </div>

        </div>

        <!-- MENU -->
        <div>

            <h2 class="text-2xl font-bold text-gray-900 mb-5">
                Menu Request
            </h2>

            <div class="grid grid-cols-4 gap-4 text-center">

                <!-- ITEM -->
                <div class="flex flex-col items-center">

                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7C3AED] to-[#60A5FA] flex items-center justify-center text-white text-2xl shadow-md">
                        +
                    </div>

                    <p class="text-[11px] text-gray-700 mt-3 leading-tight">
                        Buat Request Baru
                    </p>

                </div>

                <div class="flex flex-col items-center">

                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7C3AED] to-[#60A5FA] flex items-center justify-center text-white text-2xl shadow-md">
                        ≣
                    </div>

                    <p class="text-[11px] text-gray-700 mt-3 leading-tight">
                        Daftar Request Saya
                    </p>

                </div>

                <div class="flex flex-col items-center">

                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7C3AED] to-[#60A5FA] flex items-center justify-center text-white text-2xl shadow-md">
                        ↻
                    </div>

                    <p class="text-[11px] text-gray-700 mt-3 leading-tight">
                        Menunggu Pengambilan
                    </p>

                </div>

                <div class="flex flex-col items-center">

                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#7C3AED] to-[#60A5FA] flex items-center justify-center text-white text-2xl shadow-md">
                        ☰
                    </div>

                    <p class="text-[11px] text-gray-700 mt-3 leading-tight">
                        Riwayat Request
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>