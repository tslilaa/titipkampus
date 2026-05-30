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
            overflow-hidden
            flex flex-col">

    <!-- HEADER -->
    <div class="px-6 pt-14">

        <div class="flex items-center gap-4 mb-10">

            <button class="text-2xl text-gray-600">
                ☰
            </button>

            <h1 class="text-[34px] font-extrabold text-gray-900">
                Pengaturan
            </h1>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="flex-1 overflow-y-auto px-6 pb-10">

        <div class="space-y-4">

            <!-- ITEM -->
            <button class="w-full bg-white rounded-2xl shadow-sm border border-gray-100
                           px-5 py-5 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl">
                        🔔
                    </span>

                    <span class="font-medium text-gray-700">
                        Pengaturan Notifikasi
                    </span>

                </div>

                <span class="text-gray-400 text-xl">
                    ›
                </span>

            </button>

            <!-- ITEM -->
            <button class="w-full bg-white rounded-2xl shadow-sm border border-gray-100
                           px-5 py-5 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl">
                        🛡️
                    </span>

                    <span class="font-medium text-gray-700">
                        Privasi & Keamanan
                    </span>

                </div>

                <span class="text-gray-400 text-xl">
                    ›
                </span>

            </button>

            <!-- ITEM -->
            <button class="w-full bg-white rounded-2xl shadow-sm border border-gray-100
                           px-5 py-5 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl">
                        🌍
                    </span>

                    <span class="font-medium text-gray-700">
                        Bahasa
                    </span>

                </div>

                <div class="flex items-center gap-2">
                    <span class="text-gray-400 text-sm">
                        Indonesia
                    </span>

                    <span class="text-gray-400 text-xl">
                        ›
                    </span>
                </div>

            </button>

            <!-- ITEM -->
            <button class="w-full bg-white rounded-2xl shadow-sm border border-gray-100
                           px-5 py-5 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl">
                        ℹ️
                    </span>

                    <span class="font-medium text-gray-700">
                        Tentang Aplikasi
                    </span>

                </div>

                <span class="text-gray-400 text-xl">
                    ›
                </span>

            </button>

            <!-- ITEM -->
            <button class="w-full bg-white rounded-2xl shadow-sm border border-gray-100
                           px-5 py-5 flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <span class="text-xl">
                        ❓
                    </span>

                    <span class="font-medium text-gray-700">
                        Bantuan & FAQ
                    </span>

                </div>

                <span class="text-gray-400 text-xl">
                    ›
                </span>

            </button>

        </div>

    </div>

</div>

</body>
</html>