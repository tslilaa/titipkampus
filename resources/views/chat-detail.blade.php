<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Detail</title>

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
        <div class="px-6 pt-12 pb-5 border-b border-gray-200 flex justify-between items-center">

            <div class="flex items-center gap-4">

                <button class="text-xl text-gray-700">
                    ←
                </button>

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-12 h-12 rounded-full object-cover"
                >

                <div>
                    <h2 class="font-bold text-gray-900">
                        Justin Helper
                    </h2>

                    <p class="text-sm text-green-500">
                        Online
                    </p>
                </div>

            </div>

            <button class="text-2xl">
                📞
            </button>

        </div>

        <!-- CHAT BODY -->
        <div class="flex-1 overflow-y-auto px-5 py-6 space-y-5">

            <!-- LEFT -->
            <div>
                <div class="bg-white rounded-[1.5rem] rounded-bl-sm px-5 py-4 max-w-[80%] shadow-sm">

                    Halo kak, saya sudah ambil request kamu ya..

                </div>

                <p class="text-xs text-gray-400 mt-2 ml-2">
                    10.20
                </p>
            </div>

            <!-- RIGHT -->
            <div class="flex flex-col items-end">

                <div class="bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white rounded-[1.5rem] rounded-br-sm px-5 py-4 max-w-[80%] shadow-sm">

                    Siap, terima kasih! Nanti kabarin yaa kalau udah sampai lokasi 😊

                </div>

                <p class="text-xs text-gray-400 mt-2 mr-2">
                    10.22
                </p>
            </div>

            <!-- LEFT -->
            <div>
                <div class="bg-white rounded-[1.5rem] rounded-bl-sm px-5 py-4 max-w-[80%] shadow-sm">

                    Okee siap kakk, otwwee

                </div>

                <p class="text-xs text-gray-400 mt-2 ml-2">
                    10.22
                </p>
            </div>

            <!-- LEFT IMAGE CARD -->
            <div>

                <div class="bg-white rounded-[1.5rem] rounded-bl-sm p-4 max-w-[80%] shadow-sm">

                    <p class="mb-4">
                        Barang sudah diambil ✅
                    </p>

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/5787/5787016.png"
                        class="w-24 h-24 rounded-2xl object-cover"
                    >
                </div>

                <p class="text-xs text-gray-400 mt-2 ml-2">
                    10.28
                </p>

            </div>

            <!-- RIGHT -->
            <div class="flex flex-col items-end">

                <div class="bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white rounded-[1.5rem] rounded-br-sm px-5 py-4 max-w-[80%] shadow-sm">

                    Terima kasih banyak kakk

                </div>

                <p class="text-xs text-gray-400 mt-2 mr-2">
                    10.30
                </p>

            </div>

        </div>

        <!-- INPUT -->
        <div class="p-5 border-t border-gray-200">

            <div class="flex items-center bg-white rounded-full border border-gray-200 px-5 py-3 shadow-sm">

                <input
                    type="text"
                    placeholder="Ketik pesan..."
                    class="flex-1 outline-none text-sm bg-transparent"
                >

                <button class="text-2xl text-[#7C3AED]">
                    ➤
                </button>

            </div>

        </div>

    </div>

</body>
</html>