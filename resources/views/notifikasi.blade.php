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

        <div class="flex-1 overflow-y-auto px-6 pb-8 space-y-4">
            @forelse($notifications as $notif)

                <div class="bg-white
                            rounded-[30px]
                            p-5
                            border border-slate-100
                            shadow-[0_8px_24px_rgba(15,23,42,0.05)]">

                    <div class="flex items-center gap-4">

                        <!-- ICON -->
                        <div class="w-14 h-14 rounded-full
                                    flex items-center justify-center

                            @if($notif['status'] === 'selesai')
                                bg-emerald-500
                            @elseif($notif['status'] === 'diproses')
                                bg-violet-500
                            @else
                                bg-amber-500
                            @endif">

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

                        <!-- CONTENT -->
                        <div class="flex-1">

                            <h3 class="font-semibold text-slate-900 leading-tight">
                                {{ $notif['title'] }}
                            </h3>

                            <p class="text-[13px] text-slate-400 mt-1">
                                {{ $notif['time'] }}
                            </p>

                        </div>
                    </div>
                </div>

            @empty

                <div class="text-center py-20">

                    <p class="text-slate-400">
                        Belum ada notifikasi
                    </p>

                </div>

            @endforelse



    </div>
</div>

</body>
</html>