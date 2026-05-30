<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>

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
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-hidden flex flex-col">

        <!-- HEADER -->
        <div class="px-6 pt-14 pb-6 flex items-center gap-4">

            <button class="text-2xl text-gray-700">
                ←
            </button>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Notifikasi
            </h1>

        </div>

        <!-- LIST -->
        <div class="flex-1 overflow-y-auto px-6 pb-8 space-y-4">

            <!-- SUCCESS -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <div class="w-14 h-14 rounded-full bg-green-500 flex items-center justify-center text-white text-3xl shrink-0">
                    ✓
                </div>

                <div class="flex-1">

                    <h3 class="font-bold text-gray-900 leading-snug">
                        Request kamu berhasil diselesaikan
                    </h3>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        3 menit lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-14 h-14 rounded-full object-cover shrink-0"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Shawn Helper
                        </span>
                        sudah sampai di lokasi tujuan
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        5 menit lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Shawn Helper
                        </span>
                        perjalanan menuju lokasi tujuan
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        10 menit lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Shawn Helper
                        </span>
                        mengambil request kamu
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        22 menit lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Shawn Helper
                        </span>
                        sudah sampai di lokasi penjemputan
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        30 menit lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Amanda Rawles
                        </span>
                        memberikan rating
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        1 jam lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/19.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            El Rumi
                        </span>
                        membatalkan request anda
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        2 jam lalu
                    </p>

                </div>

            </div>

            <!-- ITEM -->
            <div class="bg-white rounded-[1.8rem] p-4 shadow-sm flex items-center gap-4">

                <img
                    src="https://randomuser.me/api/portraits/men/65.jpg"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1">

                    <p class="text-gray-700 leading-snug">
                        <span class="font-bold">
                            Gibran
                        </span>
                        memberikan rating
                    </p>

                    <p class="text-xs text-gray-400 mt-2 text-right">
                        3 jam lalu
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>
</html>