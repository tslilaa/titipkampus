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
    <div class="w-full max-w-[420px] h-[95vh]
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

                <button class="px-4 py-2 rounded-xl
                               bg-gradient-to-r
                               from-[#7C3AED]
                               to-[#60A5FA]
                               text-white text-sm font-medium shrink-0">
                    Semua
                </button>

                <button class="px-4 py-2 rounded-xl
                               bg-gray-100 text-gray-500
                               text-sm font-medium shrink-0">
                    Menunggu
                </button>

                <button class="px-4 py-2 rounded-xl
                               bg-gray-100 text-gray-500
                               text-sm font-medium shrink-0">
                    Diproses
                </button>

                <button class="px-4 py-2 rounded-xl
                               bg-gray-100 text-gray-500
                               text-sm font-medium shrink-0">
                    Selesai
                </button>

            </div>

            <!-- FILTER -->
            <div class="flex justify-between items-center mb-6">

                <button class="flex items-center gap-2
                               border border-gray-200
                               px-4 py-2 rounded-xl
                               bg-white shadow-sm">

                    <span>☷</span>
                    <span class="font-medium text-sm">
                        Filter
                    </span>

                </button>

                <button class="w-11 h-11 rounded-xl
                               border border-gray-200
                               bg-white shadow-sm
                               flex items-center justify-center text-lg">

                    🔍
                </button>

            </div>

        </div>

        <!-- LIST -->
        <div class="flex-1 overflow-y-auto px-6 pb-32 space-y-5">

            <!-- ITEM -->
            <div class="border-b border-gray-200 pb-5">

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900">
                                    Titip mie ayam
                                </h3>

                                <p class="text-sm text-gray-400 mt-1">
                                    Dari Kantin FITK → Kos Putri
                                </p>

                            </div>

                            <span class="px-3 py-1 rounded-xl
                                       text-xs font-semibold
                                       bg-orange-100 text-orange-500">

                                Menunggu
                            </span>

                        </div>

                        <h2 class="font-bold text-xl mt-3">
                            Rp 15.000
                        </h2>

                    </div>

                </div>

            </div>

            <!-- ITEM -->
            <div class="border-b border-gray-200 pb-5">

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900">
                                    Titip buku skripsi
                                </h3>

                                <p class="text-sm text-gray-400 mt-1">
                                    Dari Perpustakaan → Mahad Putri
                                </p>

                            </div>

                            <span class="px-3 py-1 rounded-xl
                                       text-xs font-semibold
                                       bg-blue-100 text-blue-500">

                                Diproses
                            </span>

                        </div>

                        <h2 class="font-bold text-xl mt-3">
                            Rp 10.000
                        </h2>

                    </div>

                </div>

            </div>

            <!-- ITEM -->
            <div>

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/2589/2589903.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900">
                                    Paket Sepatu
                                </h3>

                                <p class="text-sm text-gray-400 mt-1">
                                    Dari Lobi Kampus 2 → Kos Putra
                                </p>

                            </div>

                            <span class="px-3 py-1 rounded-xl
                                       text-xs font-semibold
                                       bg-green-100 text-green-600">

                                Selesai
                            </span>

                        </div>

                        <h2 class="font-bold text-xl mt-3">
                            Rp 20.000
                        </h2>

                    </div>

                </div>

            </div>

        </div>

        <!-- FLOAT BUTTON -->
        <button
            class="absolute bottom-10 right-10
                   w-16 h-16 rounded-full
                   bg-gradient-to-r
                   from-[#7C3AED]
                   to-[#60A5FA]
                   text-white text-5xl
                   shadow-xl flex items-center justify-center">

            +
        </button>

    </div>

</body>
</html>