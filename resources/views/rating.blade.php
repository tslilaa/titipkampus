<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beri Penilaian</title>

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

        <!-- HEADER -->
        <div class="flex items-center gap-4 mb-8">

            <button class="text-2xl text-gray-700">
                ←
            </button>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Beri Penilaian
            </h1>

        </div>

        <!-- HELPER CARD -->
        <div class="bg-white rounded-[2rem] border border-gray-200 p-4 flex items-center gap-4 mb-8 shadow-sm">

            <img
                src="https://randomuser.me/api/portraits/men/32.jpg"
                class="w-16 h-16 rounded-full object-cover"
            >

            <div>

                <p class="text-sm text-gray-400">
                    Helper
                </p>

                <h3 class="font-bold text-gray-900">
                    Justin Bieber
                </h3>

                <div class="flex items-center gap-2 mt-1">

                    <span class="text-yellow-500">
                        ⭐
                    </span>

                    <span class="font-semibold text-gray-900">
                        4.9
                    </span>

                    <span class="text-sm text-gray-400">
                        (52 Ulasan)
                    </span>

                </div>

            </div>

        </div>

        <!-- TITLE -->
        <div class="mb-8">

            <h2 class="font-bold text-gray-900 mb-5">
                Pengalaman kamu dengan Justin
            </h2>

            <!-- STARS -->
            <div class="flex gap-4 text-[40px] mb-4">

                <button class="text-yellow-400">★</button>
                <button class="text-yellow-400">★</button>
                <button class="text-yellow-400">★</button>
                <button class="text-yellow-400">★</button>
                <button class="text-yellow-400">★</button>

            </div>

            <!-- SCORE -->
            <div class="flex items-center gap-3">

                <span class="font-bold text-gray-900">
                    5.0
                </span>

                <span class="text-gray-400">
                    Sangat baik
                </span>

            </div>

        </div>

        <!-- DIVIDER -->
        <div class="border-t border-gray-200 mb-8"></div>

        <!-- REVIEW -->
        <div class="mb-10">

            <label class="block text-sm text-gray-500 mb-4">
                Ulasan (opsional)
            </label>

            <textarea
                rows="5"
                class="w-full rounded-[2rem] border border-gray-200 p-5 outline-none resize-none text-sm text-gray-700"
                placeholder="Tulis pengalaman kamu..."
            >Terima kasih banyak! Cepat dan sangatttt ramah 👋</textarea>

        </div>

        <!-- BUTTON -->
        <button
            class="w-full py-4 rounded-2xl text-white font-bold bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] shadow-lg"
        >
            Kirim Penilaian
        </button>

    </div>

</body>
</html>