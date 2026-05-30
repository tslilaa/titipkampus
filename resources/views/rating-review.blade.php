<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating & Review</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

<div class="w-full max-w-[420px] h-[95vh] bg-[#FAFAFA] rounded-[3rem] shadow-2xl overflow-y-auto px-6 pt-14 pb-10">

    <!-- HEADER -->
    <div class="flex items-center gap-4 mb-8">

        <button class="text-2xl text-gray-700">
            ☰
        </button>

        <h1 class="text-2xl font-extrabold text-gray-900">
            Rating & Review
        </h1>

    </div>

    <!-- TAB -->
    <div class="bg-gray-100 rounded-2xl p-1 flex mb-6">

        <button
            id="btnDiterima"
            onclick="showTab('diterima')"
            class="flex-1 bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-semibold py-3 rounded-xl transition">

            Diterima
        </button>

        <button
            id="btnDiberikan"
            onclick="showTab('diberikan')"
            class="flex-1 text-gray-500 font-semibold py-3 rounded-xl transition">

            Diberikan
        </button>

    </div>

    <!-- CONTENT DITERIMA -->
    <div id="diterima">

        <!-- INFO -->
        <div class="bg-purple-100 border border-purple-300 rounded-[1.7rem] p-4 flex gap-3 mb-6">

            <span class="text-purple-600 text-xl">
                ✦
            </span>

            <p class="text-sm text-gray-700">
                Feedback dari mahasiswa atas request
                yang telah anda selesaikan.
            </p>

        </div>

        <!-- CARD -->
        <div class="space-y-5">

            <div class="bg-white rounded-[2rem] p-4 border border-gray-100 shadow-sm">

                <div class="flex justify-between">

                    <div class="flex gap-4">

                        <img
                            src="https://randomuser.me/api/portraits/women/44.jpg"
                            class="w-14 h-14 rounded-full object-cover">

                        <div>

                            <h3 class="font-bold">
                                Lady Gaga
                            </h3>

                            <p class="text-sm text-gray-400">
                                Request: Titip Makanan
                            </p>

                            <p class="text-xs text-gray-400">
                                12 Mei 2026
                            </p>

                        </div>

                    </div>

                    <div class="font-bold flex gap-1">
                        ⭐ 5.0
                    </div>

                </div>

                <div class="text-yellow-400 mt-3">
                    ★★★★★
                </div>

                <div class="bg-gray-100 rounded-xl p-3 mt-3 text-sm">
                    Terima kasih banyak kakak! Sangat fast
                </div>

            </div>

        </div>

        <!-- SUMMARY -->
        <div class="bg-purple-100 border border-purple-300 rounded-[1.7rem] p-4 flex justify-between items-center mt-6">

            <div>
                <p class="text-sm">
                    Rating rata-rata anda
                </p>

                <p class="text-xs text-gray-500">
                    dari 23 penilaian
                </p>
            </div>

            <div class="font-bold text-xl">
                ⭐ 4.8
            </div>

        </div>

    </div>

    <!-- CONTENT DIBERIKAN -->
    <div id="diberikan" class="hidden">

        <!-- INFO -->
        <div class="bg-purple-100 border border-purple-300 rounded-[1.7rem] p-4 flex gap-3 mb-6">

            <span class="text-purple-600 text-xl">
                ✦
            </span>

            <p class="text-sm text-gray-700">
                Penilaian yang anda berikan kepada
                mahasiswa setelah membantu request anda.
            </p>

        </div>

        <div class="space-y-5">

            <!-- CARD -->
            <div class="bg-white rounded-[2rem] p-4 border border-gray-100 shadow-sm">

                <div class="flex justify-between">

                    <div class="flex gap-4">

                        <img
                            src="https://randomuser.me/api/portraits/men/32.jpg"
                            class="w-14 h-14 rounded-full object-cover">

                        <div>

                            <h3 class="font-bold">
                                Justin Helper
                            </h3>

                            <p class="text-sm text-gray-400">
                                Request: Titip Makanan
                            </p>

                            <p class="text-xs text-gray-400">
                                12 Mei 2026
                            </p>

                        </div>

                    </div>

                    <div class="font-bold flex gap-1">
                        ⭐ 5.0
                    </div>

                </div>

                <div class="text-yellow-400 mt-3">
                    ★★★★★
                </div>

                <div class="bg-gray-100 rounded-xl p-3 mt-3 text-sm">
                    Arigatouuu
                </div>

            </div>

        </div>

        <!-- FOOTER INFO -->
        <div class="bg-purple-100 border border-purple-300 rounded-[1.7rem] p-4 mt-6 flex gap-3">

            <span class="text-purple-600">
                !
            </span>

            <p class="text-sm text-gray-700">
                Anda dapat mengubah rating yang sudah diberikan maksimal h24 jam setelah request selesai.
            </p>

        </div>

    </div>

</div>

<script>
function showTab(tab){

    const diterima =
        document.getElementById('diterima');

    const diberikan =
        document.getElementById('diberikan');

    const btnDiterima =
        document.getElementById('btnDiterima');

    const btnDiberikan =
        document.getElementById('btnDiberikan');

    diterima.classList.add('hidden');
    diberikan.classList.add('hidden');

    btnDiterima.className =
        'flex-1 text-gray-500 font-semibold py-3 rounded-xl';

    btnDiberikan.className =
        'flex-1 text-gray-500 font-semibold py-3 rounded-xl';

    if(tab === 'diterima'){
        diterima.classList.remove('hidden');

        btnDiterima.className =
            'flex-1 bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-semibold py-3 rounded-xl';
    }

    if(tab === 'diberikan'){
        diberikan.classList.remove('hidden');

        btnDiberikan.className =
            'flex-1 bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-semibold py-3 rounded-xl';
    }
}
</script>

</body>
</html>