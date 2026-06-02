<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Request - TitipKampus</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- Phone -->
    <div class="relative w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10">

        <!-- Top -->
        <div class="flex items-center mb-8">
            <a href="{{ url('/daftar-request') }}" class="text-gray-500 mr-5 text-2xl">
                ☰
            </a>

            <h1 class="text-2xl font-extrabold text-gray-900">
                Buat Request
            </h1>
        </div>

        @if(session('success'))
            <div class="mb-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('request.store') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Jenis Titipan -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">
                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Jenis Titipan
                </label>

                <div class="flex justify-between items-center">
                    <select
                        name="kategori_id"
                        class="w-full outline-none text-gray-500 bg-transparent"
                        required
                    >
                        <option value="">Pilih Jenis Titipan</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('kategori_id') == $category->id)>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Lokasi Penjemputan -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">
                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Lokasi Penjemputan
                </label>

                <div class="flex justify-between items-center">
                    <select
                        name="lokasi_awal_id"
                        class="w-full outline-none text-sm text-gray-500 bg-transparent"
                        required
                    >
                        <option value="">Pilih Lokasi Penjemputan</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}" @selected(old('lokasi_awal_id') == $location->id)>
                                {{ $location->nama_lokasi }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Lokasi Pengantaran -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">
                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Lokasi Pengantaran
                </label>

                <div class="flex justify-between items-center">
                    <select
                        name="lokasi_tujuan_id"
                        class="w-full outline-none text-sm text-gray-500 bg-transparent"
                        required
                    >
                        <option value="">Pilih Lokasi Pengantaran</option>
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}" @selected(old('lokasi_tujuan_id') == $location->id)>
                                {{ $location->nama_lokasi }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Deskripsi Barang -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">
                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Deskripsi Barang
                </label>

                <textarea
                    name="deskripsi_barang"
                    rows="3"
                    placeholder="Contoh: charger laptop"
                    class="w-full outline-none text-sm text-gray-500 resize-none"
                    required
                >{{ old('deskripsi_barang') }}</textarea>
            </div>

            <!-- Estimasi Tip -->
            <div class="bg-white rounded-2xl p-5 shadow border border-gray-100">
                <label class="block font-bold text-sm text-gray-800 mb-2">
                    Estimasi Tip (Rp)
                </label>

                <input
                    type="number"
                    name="nominal_tip"
                    value="{{ old('nominal_tip') }}"
                    placeholder="Contoh: 10000"
                    class="w-full outline-none text-sm text-gray-500"
                    required
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