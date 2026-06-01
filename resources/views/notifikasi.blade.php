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
    <div class="w-full max-w-[420px]
            h-[95vh]
            bg-[#F8F8FB]
            rounded-[3rem]
            shadow-2xl
            overflow-hidden
            flex flex-col">

    <!-- HEADER -->
    <div class="px-6 pt-14 pb-6 relative shrink-0">

        <a href="/dashboard"
           class="absolute left-6 top-14 text-slate-700">

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="2.5"
                 stroke="currentColor"
                 class="w-6 h-6">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m15.75 19.5-7.5-7.5 7.5-7.5"/>
            </svg>
        </a>

        <h1 class="text-[28px]
                   font-bold
                   text-center
                   tracking-[-0.4px]
                   text-slate-900">

            Notifikasi
        </h1>
    </div>


    <!-- CONTENT -->
    <div class="flex-1 overflow-y-auto px-6 pb-8 space-y-4">

        <!-- SUCCESS -->
        <div class="bg-white
                    rounded-[30px]
                    p-5
                    border border-slate-100
                    shadow-[0_8px_24px_rgba(15,23,42,0.05)]">

            <div class="flex items-center gap-4">

                <div class="w-14 h-14 rounded-full
                            bg-emerald-500
                            flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="2.5"
                         stroke="currentColor"
                         class="w-7 h-7 text-white">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M5 13l4 4L19 7"/>
                    </svg>
                </div>

                <div class="flex-1">

                    <h3 class="font-semibold text-slate-900 leading-tight">
                        Request kamu berhasil diselesaikan
                    </h3>

                    <p class="text-[13px] text-slate-400 mt-1">
                        3 menit lalu
                    </p>
                </div>
            </div>
        </div>

        <!-- ITEM -->
        <a href="/track-lokasi"
           class="block bg-white
                  rounded-[30px]
                  px-5 py-4
                  border border-slate-100
                  shadow-[0_8px_24px_rgba(15,23,42,0.04)]
                  hover:scale-[1.01]
                  transition">

            <div class="flex items-center gap-4">

                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="w-14 h-14 rounded-full object-cover shrink-0">

                <div class="flex-1">

                    <h3 class="font-semibold text-slate-800">
                        Shawn Helper
                    </h3>

                    <p class="text-[14px] text-slate-500">
                        sudah sampai di lokasi tujuan
                    </p>
                </div>

                <span class="text-[12px] text-slate-400">
                    5m
                </span>
            </div>
        </a>

        <a href="/track-lokasi"
           class="block bg-white rounded-[30px] px-5 py-4 border border-slate-100 shadow-[0_8px_24px_rgba(15,23,42,0.04)]">

            <div class="flex items-center gap-4">

                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="w-14 h-14 rounded-full object-cover">

                <div class="flex-1">

                    <h3 class="font-semibold text-slate-800">
                        Shawn Helper
                    </h3>

                    <p class="text-[14px] text-slate-500">
                        perjalanan menuju lokasi tujuan
                    </p>
                </div>

                <span class="text-[12px] text-slate-400">
                    10m
                </span>
            </div>
        </a>

        <a href="/detail-req-proses"
           class="block bg-white rounded-[30px] px-5 py-4 border border-slate-100 shadow-[0_8px_24px_rgba(15,23,42,0.04)]">

            <div class="flex items-center gap-4">

                <img src="https://randomuser.me/api/portraits/men/32.jpg"
                     class="w-14 h-14 rounded-full object-cover">

                <div class="flex-1">

                    <h3 class="font-semibold text-slate-800">
                        Shawn Helper
                    </h3>

                    <p class="text-[14px] text-slate-500">
                        mengambil request kamu
                    </p>
                </div>

                <span class="text-[12px] text-slate-400">
                    22m
                </span>
            </div>
        </a>

        <a href="/rating-review"
           class="block bg-white rounded-[30px] px-5 py-4 border border-slate-100 shadow-[0_8px_24px_rgba(15,23,42,0.04)]">

            <div class="flex items-center gap-4">

                <img src="https://randomuser.me/api/portraits/women/44.jpg"
                     class="w-14 h-14 rounded-full object-cover">

                <div class="flex-1">

                    <h3 class="font-semibold text-slate-800">
                        Amanda Rawles
                    </h3>

                    <p class="text-[14px] text-slate-500">
                        memberikan rating
                    </p>
                </div>

                <span class="text-[12px] text-slate-400">
                    1j
                </span>
            </div>
        </a>

    </div>
</div>

</body>
</html>