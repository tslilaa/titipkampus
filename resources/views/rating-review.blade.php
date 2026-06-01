<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Rating & Review</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body{
            font-family:'Poppins',sans-serif;
        }
    </style>
</head>

<body class="bg-[#EDEDED] flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="relative
            w-full
            max-w-[420px]
            h-[95vh]
            bg-[#F8F8FB]
            rounded-[3rem]
            shadow-2xl
            overflow-hidden
            flex flex-col">

    @include('components.sidebar')

        <!-- SCROLL -->
        <div class="flex-1 overflow-y-auto px-6 pt-14 pb-8">

            <!-- HEADER -->
            <div class="flex items-center justify-between mb-8">

                <!-- SIDEBAR BUTTON -->
                <button
                    onclick="openSidebar()"
                    class="text-slate-600">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2.2"
                        stroke="currentColor"
                        class="w-7 h-7">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                    </svg>

                </button>

                <!-- TITLE -->
                <h1 class="text-[28px]
                        font-bold
                        tracking-[-0.4px]
                        text-slate-900">

                    Rating & Review
                </h1>

                <!-- SPACER -->
                <div class="w-7"></div>

            </div>


            <!-- TAB -->
            <div class="bg-slate-100
                        rounded-[24px]
                        p-1.5
                        flex
                        mb-7">

                <button
                    id="btnDiterima"
                    onclick="showTab('diterima')"
                    class="flex-1
                           py-3.5
                           rounded-[18px]
                           bg-gradient-to-r
                           from-[#7C3AED]
                           to-[#60A5FA]
                           text-white
                           font-semibold
                           transition">

                    Diterima
                </button>

                <button
                    id="btnDiberikan"
                    onclick="showTab('diberikan')"
                    class="flex-1
                           py-3.5
                           rounded-[18px]
                           text-slate-500
                           font-semibold
                           transition">

                    Diberikan
                </button>

            </div>


            <!-- DITERIMA -->
            <div id="diterima">

                <!-- INFO -->
                <div class="bg-violet-50
                            border border-violet-100
                            rounded-[28px]
                            p-5
                            flex gap-4
                            mb-6">

                    <div class="w-11 h-11
                                rounded-2xl
                                bg-violet-100
                                flex items-center justify-center
                                shrink-0">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke-width="2.2"
                             stroke="currentColor"
                             class="w-5 h-5 text-violet-600">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11.25 11.25L12 12m0 0l.75.75M12 12l.75-.75M12 12l-.75.75M12 21a9 9 0 100-18 9 9 0 000 18z"/>
                        </svg>
                    </div>

                    <p class="text-[14px] text-slate-600 leading-relaxed">
                        Penilaian dari mahasiswa untuk request
                        yang telah kamu bantu.
                    </p>

                </div>


                <div class="space-y-5">

                    <!-- CARD -->
                    <div class="bg-white
                            rounded-[30px]
                            p-5
                            border border-slate-100
                            shadow-[0_8px_24px_rgba(15,23,42,0.04)]">

                        <div class="flex justify-between gap-4">

                            <div class="flex gap-4">

                                <img
                                    src="https://randomuser.me/api/portraits/women/44.jpg"
                                    class="w-14 h-14 rounded-full object-cover shrink-0">

                                <div>

                                    <h3 class="font-semibold text-[17px] text-slate-900">
                                        Lady Gaga
                                    </h3>

                                    <p class="text-[14px] text-slate-500">
                                        Titip Makanan
                                    </p>

                                    <p class="text-[12px] text-slate-400 mt-1">
                                        12 Mei 2026
                                    </p>

                                </div>
                            </div>

                            <div class="bg-yellow-50
                                        px-3 py-2
                                        rounded-2xl
                                        h-fit
                                        flex items-center gap-1">

                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     fill="currentColor"
                                     class="w-4 h-4 text-yellow-400">

                                    <path fill-rule="evenodd"
                                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.258 5.272c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.632 2.825c-.996.608-2.231-.29-1.96-1.425l1.258-5.272-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005z"/>
                                </svg>

                                <span class="font-semibold text-slate-800">
                                    5.0
                                </span>
                            </div>

                        </div>

                        <div class="flex gap-1 mt-4">

                            @for($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     fill="currentColor"
                                     class="w-5 h-5 text-yellow-400">

                                    <path fill-rule="evenodd"
                                          d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.258 5.272c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.632 2.825c-.996.608-2.231-.29-1.96-1.425l1.258-5.272-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005z"/>
                                </svg>
                            @endfor

                        </div>

                        <div class="bg-slate-50
                                    rounded-[22px]
                                    p-4
                                    mt-4
                                    text-[14px]
                                    text-slate-600">

                            Terima kasih banyak, sangat cepat dan membantu.
                        </div>

                    </div>

                </div>


                <!-- SUMMARY -->
                <div class="bg-gradient-to-r
                            from-[#7C3AED]
                            to-[#60A5FA]
                            rounded-[30px]
                            p-5
                            mt-6
                            text-white">

                    <p class="text-[14px] text-white/80">
                        Rating rata-rata
                    </p>

                    <div class="flex items-end justify-between mt-2">

                        <div>
                            <h3 class="text-[36px] font-bold leading-none">
                                4.8
                            </h3>

                            <p class="text-[13px] text-white/70 mt-1">
                                dari 23 penilaian
                            </p>
                        </div>

                        <div class="text-[14px] font-medium">
                            Sangat baik
                        </div>

                    </div>

                </div>

            </div>


            <!-- DIBERIKAN -->
            <div id="diberikan" class="hidden">

                <div class="bg-violet-50
                            border border-violet-100
                            rounded-[28px]
                            p-5
                            flex gap-4
                            mb-6">

                    <div class="w-11 h-11
                                rounded-2xl
                                bg-violet-100
                                flex items-center justify-center shrink-0">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke-width="2.2"
                             stroke="currentColor"
                             class="w-5 h-5 text-violet-600">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M12 6v6l4 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <p class="text-[14px] text-slate-600 leading-relaxed">
                        Penilaian yang kamu berikan kepada helper.
                    </p>

                </div>

                <!-- CARD -->
                <div
                    onclick="editRating()"
                    class="bg-white
                        rounded-[30px]
                        p-5
                        cursor-pointer
                        border border-slate-100
                        hover:shadow-md
                        hover:scale-[1.01]
                        transition duration-200">

                    <div class="flex justify-between">

                        <div class="flex gap-4">

                            <img
                                src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-14 h-14 rounded-full object-cover">

                            <div>

                                <h3 class="font-semibold text-[17px] text-slate-900">
                                    Justin Helper
                                </h3>

                                <p class="text-[14px] text-slate-500">
                                    Titip Makanan
                                </p>

                                <p class="text-[12px] text-slate-400 mt-1">
                                    12 Mei 2026
                                </p>

                            </div>
                        </div>

                        <div class="bg-yellow-50 px-3 py-2 rounded-2xl h-fit flex items-center gap-1">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 fill="currentColor"
                                 class="w-4 h-4 text-yellow-400">

                                <path fill-rule="evenodd"
                                      d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.258 5.272c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.632 2.825c-.996.608-2.231-.29-1.96-1.425l1.258-5.272-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005z"/>
                            </svg>

                            <span class="font-semibold text-slate-800">
                                5.0
                            </span>
                        </div>

                    </div>

                    <div class="bg-slate-50 rounded-[22px] p-4 mt-4 text-[14px] text-slate-600">
                        Sangat membantu dan responsif.
                    </div>

                </div>

                <!-- INFO WARNING -->
                <div class="mt-6
                            bg-violet-50
                            border border-violet-200
                            rounded-[28px]
                            p-5
                            flex gap-4">

                    <div class="w-11 h-11
                                shrink-0
                                rounded-2xl
                                bg-violet-100
                                flex items-center justify-center">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2.2"
                            stroke="currentColor"
                            class="w-6 h-6 text-violet-600">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 4.5h.008v.008H12v-.008z"/>
                        </svg>

                    </div>

                    <p class="text-[14px]
                            leading-relaxed
                            text-slate-600">

                        Anda dapat mengubah rating yang sudah
                        diberikan maksimal 1x24 jam setelah
                        request selesai.

                    </p>

                </div>

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
        'flex-1 py-3.5 rounded-[18px] text-slate-500 font-semibold transition';

    btnDiberikan.className =
        'flex-1 py-3.5 rounded-[18px] text-slate-500 font-semibold transition';

    if(tab === 'diterima'){

        diterima.classList.remove('hidden');

        btnDiterima.className =
            'flex-1 py-3.5 rounded-[18px] bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-semibold transition';
    }

    if(tab === 'diberikan'){

        diberikan.classList.remove('hidden');

        btnDiberikan.className =
            'flex-1 py-3.5 rounded-[18px] bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-semibold transition';
    }
}

function editRating(){

    // simulasi waktu request selesai
    const selesaiAt =
        new Date('2026-06-02T10:00:00');

    const sekarang =
        new Date();

    const diffHours =
        (sekarang - selesaiAt)
        / (1000 * 60 * 60);

    if(diffHours <= 24){

        window.location.href =
            '/rating?edit=true';

    }else{

        alert(
            'Batas edit penilaian sudah lewat (maksimal 1x24 jam)'
        );
    }
}

</script>

</body>
</html>

