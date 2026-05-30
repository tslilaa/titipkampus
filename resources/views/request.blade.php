<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Request - TitipKampus</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- Phone -->
    <div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10">

        <!-- Top -->
        <div class="flex items-center mb-8">

            <button class="text-gray-500 mr-5">
                ☰
            </button>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Buat Request
            </h1>
        </div>

        <!-- Form -->
        <form class="space-y-5">

            <!-- Jenis Titipan -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">

                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Jenis Titipan
                </label>

                <div class="flex justify-between items-center">
                    <select class="w-full outline-none text-gray-500 bg-transparent">
                        <option>Pilih Jenis Titipan</option>
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Dokumen</option>
                        <option>Paket</option>
                    </select>

                    <span>⌄</span>
                </div>
            </div>

            <!-- Lokasi Penjemputan -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">

                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Lokasi Penjemputan
                </label>

                <input
                    type="text"
                    placeholder="Pilih Lokasi Penjemputan"
                    class="w-full outline-none text-sm text-gray-500"
                >
            </div>

            <!-- Lokasi Pengantaran -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">

                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Lokasi Pengantaran
                </label>

                <input
                    type="text"
                    placeholder="Pilih Lokasi Pengantaran"
                    class="w-full outline-none text-sm text-gray-500"
                >
            </div>

            <!-- Deskripsi Barang -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">

                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Deskripsi Barang
                </label>

                <textarea
                    rows="3"
                    placeholder="Contoh: charger laptop"
                    class="w-full outline-none text-sm text-gray-500 resize-none"
                ></textarea>
            </div>

            <!-- Estimasi Tip -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">

                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Estimasi Tip (Rp)
                </label>

                <input
                    type="number"
                    placeholder="Contoh: 10.000"
                    class="w-full outline-none text-sm text-gray-500"
                >
            </div>

            <!-- Tips -->
            <div class="bg-purple-100 border border-purple-300 rounded-3xl p-5">

                <h2 class="text-purple-700 font-extrabold text-lg mb-3">
                    Tips
                </h2>

                <ul class="space-y-3 text-sm text-gray-700">
                    <li>⭐ Pastikan informasi sudah lengkap</li>
                    <li>⭐ Berikan deskripsi yang jelas</li>
                    <li>⭐ Tentukan budget yang sesuai</li>
                </ul>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full py-4 rounded-2xl text-white font-bold bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] shadow-lg"
            >
                Buat Request
            </button>

        </form>

    </div>

</body>
</html>