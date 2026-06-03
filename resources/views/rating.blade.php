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

<body class="bg-[#EDEDED] flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="w-full
                max-w-[420px]
                h-[95vh]
                bg-[#F8F8FB]
                rounded-[3rem]
                shadow-2xl
                overflow-hidden
                flex flex-col">

        <!-- SCROLL AREA -->
        <div class="flex-1 overflow-y-auto px-6 pt-14 pb-8">

            <!-- HEADER -->
            <div class="relative mb-8">

                <a href="javascript:history.back()"
                class="absolute left-0 top-1 text-slate-700">

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
                        tracking-[-0.5px]
                        text-center
                        text-slate-900">

                    Beri Penilaian
                </h1>

            </div>

            <!-- HELPER CARD -->
            <div class="bg-white
                        rounded-[32px]
                        border border-slate-100
                        p-5
                        flex items-center gap-4
                        mb-8
                        shadow-[0_10px_30px_rgba(15,23,42,0.05)]">

                <img
                    src="https://randomuser.me/api/portraits/men/32.jpg"
                    class="w-16 h-16
                        rounded-full
                        object-cover
                        border-4 border-white
                        shadow-[0_6px_18px_rgba(15,23,42,0.12)]">

                <div class="flex-1">

                    <p class="text-[13px] text-slate-400">
                        Helper
                    </p>

                    <h3 class="text-[20px]
                            font-bold
                            text-slate-900
                            leading-tight">

                        Justin Bieber
                    </h3>

                    <div class="flex items-center gap-2 mt-1.5">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-5 h-5 text-yellow-400">

                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.258 5.272c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.632 2.825c-.996.608-2.231-.29-1.96-1.425l1.258-5.272-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005z"
                                clip-rule="evenodd"/>
                        </svg>

                        <span class="font-semibold text-slate-900">
                            4.9
                        </span>

                        <span class="text-[14px] text-slate-400">
                            (52 ulasan)
                        </span>

                    </div>

                </div>

            </div>

            <!-- TITLE -->
            <div class="mb-7">

                <h2 class="text-[20px]
                        font-bold
                        tracking-[-0.3px]
                        text-slate-900">

                    Pengalaman kamu dengan Justin
                </h2>

                <p class="text-[14px]
                        text-slate-500
                        mt-1.5">

                    Bagaimana pengalaman kamu menggunakan layanan helper ini?
                </p>

            </div>

            <!-- STAR RATING -->
            <div class="mb-6">

                <div class="flex justify-between mb-5">

                    @for ($i = 1; $i <= 5; $i++)
                    <button
                        type="button"
                        onclick="setRating({{ $i }})"
                        class="star-btn
                            w-[58px]
                            h-[58px]
                            rounded-full
                            bg-slate-100
                            flex items-center justify-center
                            transition duration-200 hover:scale-105"
                        data-rating="{{ $i }}">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="star-icon w-8 h-8 text-slate-300">

                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.258 5.272c.271 1.136-.964 2.033-1.96 1.425L12 18.354l-4.632 2.825c-.996.608-2.231-.29-1.96-1.425l1.258-5.272-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005z"
                                clip-rule="evenodd"/>
                        </svg>

                    </button>
                    @endfor

                </div>

                <!-- SCORE -->
                <div class="flex items-center gap-3">

                    <span id="ratingScore"
                        class="text-[22px] font-bold text-slate-900">

                        0.0
                    </span>

                    <span id="ratingText"
                        class="text-slate-500">

                        Pilih penilaian
                    </span>

                </div>
            </div>

            <!-- DIVIDER -->
            <div class="border-t border-slate-200 mb-8"></div>

            <!-- REVIEW -->
            <div class="mb-8">

                <label class="block
                            text-[14px]
                            text-slate-500
                            mb-3">

                    Ulasan (opsional)
                </label>

                <textarea
                    rows="5"
                    placeholder="Tulis pengalaman kamu..."
                    class="w-full
                        rounded-[30px]
                        border border-slate-200
                        bg-white
                        p-5
                        outline-none
                        resize-none
                        text-[15px]
                        text-slate-700
                        placeholder:text-slate-400
                        focus:ring-4
                        focus:ring-violet-100
                        transition">{{ request('edit')
                            ? 'Sangat membantu dan responsif.'
                            : '' }}</textarea>

            </div>

            <!-- BUTTON -->
            <button
                type="button"
                onclick="submitRating()"
                class="w-full
                    py-5
                    rounded-[28px]
                    text-white
                    font-semibold
                    text-[16px]
                    bg-gradient-to-r
                    from-[#7C3AED]
                    to-[#60A5FA]
                    shadow-[0_12px_30px_rgba(124,58,237,0.28)]
                    hover:scale-[1.01]
                    transition duration-200">

                {{ request('edit')
                    ? 'Perbarui Penilaian'
                    : 'Kirim Penilaian' }}

            </button>

        </div>

    </div>
<script>
    let currentRating = 0;

    function setRating(rating){

        currentRating = rating;

        const stars =
            document.querySelectorAll('.star-btn');

        stars.forEach((star,index)=>{

            const icon =
                star.querySelector('.star-icon');

            if(index < rating){

                star.classList.remove(
                    'bg-slate-100'
                );

                star.classList.add(
                    'bg-yellow-50'
                );

                icon.classList.remove(
                    'text-slate-300'
                );

                icon.classList.add(
                    'text-yellow-400'
                );

            }else{

                star.classList.remove(
                    'bg-yellow-50'
                );

                star.classList.add(
                    'bg-slate-100'
                );

                icon.classList.remove(
                    'text-yellow-400'
                );

                icon.classList.add(
                    'text-slate-300'
                );
            }
        });

        const texts = {
            1:'Buruk',
            2:'Kurang',
            3:'Lumayan',
            4:'Bagus',
            5:'Sangat baik'
        };

        document.getElementById(
            'ratingScore'
        ).innerText = rating + '.0';

        document.getElementById(
            'ratingText'
        ).innerText = texts[rating];
    }

    function submitRating(){

        if(currentRating === 0){

            alert(
                'Pilih rating terlebih dahulu'
            );

            return;
        }

        alert(
            'Penilaian berhasil dikirim'
        );
        
        const reviewText = document.querySelector('textarea').value;

        window.location.href =
            '/rating-review?tab=diberikan&demo_rating=' + currentRating + '&demo_review=' + encodeURIComponent(reviewText);
    }

    window.onload = () => {

    const isEdit =
        new URLSearchParams(
            window.location.search
        ).get('edit');

    if(isEdit){

        setRating(5);
    }
}
</script>
</body>
</html>
