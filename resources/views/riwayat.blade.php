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
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="w-full max-w-[420px]
                h-[95vh]
                bg-[#FAFAFA]
                rounded-[3rem]
                shadow-2xl
                overflow-hidden
                flex flex-col">

        <!-- HEADER -->
        <div class="px-6 pt-14">

            <button class="text-2xl text-gray-500 mb-6">
                ☰
            </button>

            <h1 class="text-[34px] font-extrabold text-gray-900 mb-5">
                Riwayat
            </h1>

            <!-- TAB -->
            <div class="flex gap-3 mb-8">

                <button class="px-5 py-2 rounded-xl
                               bg-gradient-to-r
                               from-[#7C3AED]
                               to-[#60A5FA]
                               text-white text-sm font-medium">

                    Semua
                </button>

                <button class="px-5 py-2 rounded-xl
                               bg-gray-100 text-gray-500
                               text-sm font-medium">

                    Selesai
                </button>

                <button class="px-5 py-2 rounded-xl
                               bg-gray-100 text-gray-500
                               text-sm font-medium">

                    Dibatalkan
                </button>

            </div>

        </div>

        <!-- LIST -->
        <div class="flex-1 overflow-y-auto px-6 pb-10 space-y-6">

            <!-- ITEM -->
            <div class="border-b border-gray-200 pb-5">

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900 text-lg">
                                    Titip Nasi Goreng
                                </h3>

                                <h4 class="font-semibold text-gray-800">
                                    Rp 22.000
                                </h4>

                                <p class="text-sm text-gray-400 mt-1">
                                    Helper: Justin
                                </p>

                            </div>

                            <div class="text-right">

                                <span class="px-3 py-1 rounded-xl
                                           text-xs font-semibold
                                           bg-green-100 text-green-600">

                                    Selesai
                                </span>

                                <p class="text-xs text-gray-400 mt-2">
                                    11 Mei 2026
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ITEM -->
            <div class="border-b border-gray-200 pb-5">

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900 text-lg">
                                    Ambil Laundry
                                </h3>

                                <h4 class="font-semibold text-gray-800">
                                    Rp 10.000
                                </h4>

                                <p class="text-sm text-gray-400 mt-1">
                                    Helper: Mark
                                </p>

                            </div>

                            <div class="text-right">

                                <span class="px-3 py-1 rounded-xl
                                           text-xs font-semibold
                                           bg-red-100 text-red-500">

                                    Dibatalkan
                                </span>

                                <p class="text-xs text-gray-400 mt-2">
                                    11 Mei 2026
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ITEM -->
            <div class="border-b border-gray-200 pb-5">

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900 text-lg">
                                    Ambil Laptop
                                </h3>

                                <h4 class="font-semibold text-gray-800">
                                    Rp 5.000
                                </h4>

                                <p class="text-sm text-gray-400 mt-1">
                                    Helper: Mark
                                </p>

                            </div>

                            <div class="text-right">

                                <span class="px-3 py-1 rounded-xl
                                           text-xs font-semibold
                                           bg-green-100 text-green-600">

                                    Selesai
                                </span>

                                <p class="text-xs text-gray-400 mt-2">
                                    10 Mei 2026
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ITEM -->
            <div>

                <div class="flex gap-4">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/5787/5787016.png"
                        class="w-20 h-20 rounded-2xl object-cover shadow-sm">

                    <div class="flex-1">

                        <div class="flex justify-between items-start">

                            <div>

                                <h3 class="font-bold text-gray-900 text-lg">
                                    Titip Es Teh
                                </h3>

                                <h4 class="font-semibold text-gray-800">
                                    Rp 7.000
                                </h4>

                                <p class="text-sm text-gray-400 mt-1">
                                    Helper: Mingyu
                                </p>

                            </div>

                            <div class="text-right">

                                <span class="px-3 py-1 rounded-xl
                                           text-xs font-semibold
                                           bg-green-100 text-green-600">

                                    Selesai
                                </span>

                                <p class="text-xs text-gray-400 mt-2">
                                    09 Mei 2026
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>