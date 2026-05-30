<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - TitipKampus</title>

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
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10">

        <!-- TOPBAR -->
        <div class="flex justify-between items-center mb-8">

            <button class="text-gray-500 text-2xl">
                ☰
            </button>

            <button class="text-gray-500 text-2xl relative">
                🔔

                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
            </button>

        </div>

        <!-- TITLE -->
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">
            Chat
        </h1>

        <!-- SEARCH -->
        <div class="flex gap-3 mb-8">

            <div class="flex-1 relative">

                <input
                    type="text"
                    placeholder="Cari percakapan..."
                    class="w-full bg-gray-100 rounded-2xl py-4 pl-12 pr-4 outline-none text-sm"
                >

                <span class="absolute left-4 top-4 text-gray-400">
                    🔍
                </span>

            </div>

            <button class="w-14 rounded-2xl bg-gray-100 flex items-center justify-center text-xl">
                ⚙️
            </button>

        </div>

        <!-- CHAT LIST -->
        <div class="space-y-6">

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Mark Helper
                        </h3>

                        <p class="text-sm text-gray-500">
                            Alr, ur welcome
                        </p>

                    </div>

                </div>

                <div class="text-right">

                    <p class="text-sm text-gray-400 mb-2">
                        20.55
                    </p>

                    <span class="bg-green-500 text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center ml-auto">
                        2
                    </span>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/women/44.jpg"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Mingyu Helper
                        </h3>

                        <p class="text-sm text-gray-500">
                            Makasih kak
                        </p>

                    </div>

                </div>

                <p class="text-sm text-gray-400">
                    15.30
                </p>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/women/12.jpg"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Selena Titip Paket
                        </h3>

                        <p class="text-sm text-gray-500">
                            Sampun mbak
                        </p>

                    </div>

                </div>

                <div class="text-right">

                    <p class="text-sm text-gray-400 mb-2">
                        14.45
                    </p>

                    <span class="bg-green-500 text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center ml-auto">
                        1
                    </span>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/men/19.jpg"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Justin Titip Sepatu
                        </h3>

                        <p class="text-sm text-gray-500">
                            Aman
                        </p>

                    </div>

                </div>

                <div class="text-right">

                    <p class="text-sm text-gray-400 mb-2">
                        13.55
                    </p>

                    <span class="bg-green-500 text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center ml-auto">
                        1
                    </span>

                </div>

            </div>

            <!-- ITEM -->
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/women/67.jpg"
                        class="w-16 h-16 rounded-full object-cover"
                    >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Gigi Helper
                        </h3>

                        <p class="text-sm text-gray-500">
                            Di luar mba, panas
                        </p>

                    </div>

                </div>

                <p class="text-sm text-gray-400">
                    08.30
                </p>

            </div>

        </div>

    </div>

</body>
</html>