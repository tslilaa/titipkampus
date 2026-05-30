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
            bg-[#F8F8F8]
            rounded-[3rem]
            shadow-2xl
            overflow-hidden
            flex flex-col">

    <!-- HEADER -->
    <div class="bg-gradient-to-br
                from-[#5B7FFF]
                via-[#6E68FF]
                to-[#C04BFF]
                rounded-b-[3rem]
                px-6
                pt-14
                pb-16
                text-white">

        <!-- TOPBAR -->
        <div class="flex justify-between items-center">

            <button class="text-3xl">
                ☰
            </button>

            <h1 class="font-bold text-2xl">
                Titipin
            </h1>

        </div>

        <!-- PROFILE -->
        <div class="flex flex-col items-center mt-8">

            <div class="relative">

                <img
                    src="https://randomuser.me/api/portraits/women/44.jpg"
                    class="w-32 h-32 rounded-full
                           border-[5px]
                           border-white
                           object-cover shadow-lg">

                <!-- CAMERA -->
                <button
                    class="absolute bottom-0 right-0
                           w-12 h-12 rounded-full
                           bg-white text-xl
                           flex items-center justify-center
                           shadow-lg">

                    📷
                </button>

            </div>

            <h2 class="text-[42px] font-extrabold mt-4 leading-none">
                Alisha Jane
            </h2>

            <p class="text-white/80 mt-2 text-sm">
                #23080960032
            </p>

        </div>

    </div>

    <!-- CONTENT -->
    <div class="flex-1 overflow-y-auto px-6 pb-10 -mt-8">

        <!-- STATS -->
        <div class="bg-white
                    rounded-[2rem]
                    shadow-xl
                    px-6 py-5
                    mb-6">

            <div class="grid grid-cols-3 text-center">

                <div>
                    <h2 class="text-[48px] font-extrabold text-[#7C3AED] leading-none">
                        12
                    </h2>

                    <p class="text-gray-400 text-sm mt-2">
                        Total Request
                    </p>
                </div>

                <div>
                    <h2 class="text-[48px] font-extrabold text-[#7C3AED] leading-none">
                        4.8
                    </h2>

                    <p class="text-gray-400 text-sm mt-2">
                        Rating
                    </p>
                </div>

                <div>
                    <h2 class="text-[48px] font-extrabold text-[#7C3AED] leading-none">
                        24
                    </h2>

                    <p class="text-gray-400 text-sm mt-2">
                        Ulasan
                    </p>
                </div>

            </div>

        </div>

        <!-- INFO -->
        <div class="bg-white rounded-[2rem] shadow-lg overflow-hidden mb-6">

            <div class="flex justify-between items-center p-5 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <span>📧</span>
                    <span class="font-medium">
                        Email Kampus
                    </span>
                </div>

                <span class="text-sm text-gray-500">
                    23080960032@walisongo.ac.id
                </span>
            </div>

            <div class="flex justify-between items-center p-5 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <span>📱</span>
                    <span class="font-medium">
                        Nomor Whatsapp
                    </span>
                </div>

                <span class="text-sm text-gray-500">
                    081562781829
                </span>
            </div>

            <div class="flex justify-between items-center p-5 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <span>📍</span>
                    <span class="font-medium">
                        ISDB FST
                    </span>
                </div>

                <span class="text-sm text-gray-500">
                    ISDB FST
                </span>
            </div>

            <div class="flex justify-between items-center p-5">
                <div class="flex items-center gap-3">
                    <span>🪪</span>
                    <span class="font-medium">
                        NIM
                    </span>
                </div>

                <span class="text-sm text-gray-500">
                    23080960032
                </span>
            </div>

        </div>

        <!-- MENU -->
        <div class="bg-white rounded-[2rem] shadow-lg overflow-hidden">

            <button class="w-full p-5 border-b border-gray-100 flex justify-between">
                <span>🔒 Ubah Password</span>
                <span>›</span>
            </button>

            <button class="w-full p-5 border-b border-gray-100 flex justify-between">
                <span>📍 Alamat Tersimpan</span>
                <span>›</span>
            </button>

            <button class="w-full p-5 border-b border-gray-100 flex justify-between">
                <span>💳 Metode Pembayaran</span>
                <span>›</span>
            </button>

            <button class="w-full p-5 flex justify-between">
                <span>❓ Bantuan</span>
                <span>›</span>
            </button>

        </div>

    </div>

</div>

</body>
</html>