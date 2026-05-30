<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Request</title>

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
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10 relative">

        <!-- HEADER -->
        <div class="flex items-center mb-8">

            <button class="text-gray-700 text-2xl mr-4">
                ←
            </button>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Detail Request
            </h1>
        </div>

        <!-- CARD REQUEST -->
        <div class="flex justify-between items-start bg-white rounded-3xl p-4 shadow-sm border border-gray-100 mb-8">

            <div class="flex gap-4">

                <!-- Image -->
                <img
                    src="https://cdn-icons-png.flaticon.com/512/5787/5787016.png"
                    class="w-16 h-16 rounded-2xl object-cover"
                >

                <!-- Text -->
                <div>

                    <h2 class="font-bold text-gray-900 text-lg">
                        Titip Es Teh
                    </h2>

                    <p class="text-sm text-gray-400 mt-1">
                        Request ID: #001
                    </p>

                    <p class="text-xs text-gray-400 mt-2">
                        30 menit lalu
                    </p>

                </div>
            </div>

            <!-- Status -->
            <span class="bg-orange-100 text-orange-500 px-4 py-2 rounded-xl text-sm font-semibold">
                Menunggu
            </span>

        </div>

        <!-- DETAIL -->
        <div class="space-y-7">

            <!-- ITEM -->
            <div class="flex gap-4">

                <span class="text-2xl">👜</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Jenis Titipan
                    </p>

                    <h3 class="font-bold text-gray-900">
                        Minuman
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">📍</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Dari
                    </p>

                    <h3 class="font-bold text-gray-900">
                        Kantin Kampus
                    </h3>

                    <p class="text-sm text-gray-400">
                        Jl. Walisongo 23
                    </p>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">🗺️</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Tujuan
                    </p>

                    <h3 class="font-bold text-gray-900">
                        Kos Putri GP 1
                    </h3>

                    <p class="text-sm text-gray-400">
                        Jl. Graha Padma
                    </p>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">🛒</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Deskripsi
                    </p>

                    <h3 class="font-bold text-gray-900">
                        Beli Es Teh Tawar 5
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">💰</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Estimasi Tip (Rp)
                    </p>

                    <h3 class="font-bold text-gray-900">
                        25.000
                    </h3>
                </div>
            </div>

            <div class="flex gap-4">

                <span class="text-2xl">📌</span>

                <div>
                    <p class="text-sm text-gray-400">
                        Jarak
                    </p>

                    <h3 class="font-bold text-gray-900">
                        3,2 km
                    </h3>
                </div>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-14">

            <button
                class="w-full border-2 border-red-500 text-red-500 py-4 rounded-2xl font-bold hover:bg-red-500 hover:text-white transition"
            >
                Batalkan Request
            </button>

        </div>

    </div>

</body>
</html>