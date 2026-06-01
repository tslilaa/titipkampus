<!-- OVERLAY -->
<div id="overlay"
     onclick="closeSidebar()"
     class="absolute inset-0 bg-black/40 z-40 hidden">
</div>

<!-- SIDEBAR -->
<div id="sidebar"
     class="absolute top-0 left-0
            w-[290px]
            h-full
            bg-white
            shadow-2xl
            z-50
            rounded-r-[2rem]
            overflow-hidden
            transform
            -translate-x-full
            transition-transform
            duration-300">

    <!-- HEADER -->
    <div class="bg-gradient-to-r
                from-[#7C3AED]
                to-[#60A5FA]
                px-6 pt-14 pb-8">

        <div class="flex justify-between items-center text-white">

            <div>

                <h2 class="text-3xl font-bold">
                    Titipin
                </h2>

                <p class="text-sm text-white/80 mt-1">
                    {{ auth()->user()->nama_lengkap ?? 'Guest' }}
                </p>

            </div>

            <button onclick="closeSidebar()">

                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="2"
                     stroke="currentColor"
                     class="w-7 h-7">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>

            </button>

        </div>

    </div>

    <!-- MENU -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">

        <a href="/dashboard"
           class="menu-item bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white">

            <svg xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="2"
                 stroke="currentColor"
                 class="w-5 h-5">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3.75 3v18h18"/>
            </svg>

            Dashboard
        </a>

        <a href="/request"
           class="menu-item">

            Buat Request
        </a>

        <a href="/daftar-request"
           class="menu-item">

            Daftar Request
        </a>

        <a href="/chat"
           class="menu-item">

            Chat
        </a>

        <a href="/riwayat"
           class="menu-item">

            Riwayat
        </a>

        <a href="/rating-review"
           class="menu-item">

            Rating
        </a>

        <a href="/profil"
           class="menu-item">

            Profil
        </a>

        <a href="/pengaturan"
           class="menu-item">

            Pengaturan
        </a>

    </div>

    <!-- LOGOUT -->
    <div class="p-4 shrink-0">

        <form action="/logout" method="POST">
            @csrf

            <button
                class="w-full py-4
                       rounded-2xl
                       bg-red-500
                       hover:bg-red-600
                       text-white
                       font-semibold">

                Logout
            </button>

        </form>

    </div>

</div>

<style>
.menu-item{
    display:flex;
    align-items:center;
    gap:12px;
    padding:16px 18px;
    border-radius:20px;
    font-weight:500;
    color:#4B5563;
    transition:0.2s;
}

.menu-item:hover{
    background:#F3F4F6;
}
</style>

<script>
function openSidebar(){

    document
        .getElementById('sidebar')
        .classList.remove(
            '-translate-x-full'
        );

    document
        .getElementById('overlay')
        .classList.remove(
            'hidden'
        );

    // lock scroll phone
    document
        .querySelector('.phone-container')
        .style.overflow = 'hidden';
}


function closeSidebar(){

    document
        .getElementById('sidebar')
        .classList.add(
            '-translate-x-full'
        );

    document
        .getElementById('overlay')
        .classList.add(
            'hidden'
        );

    // unlock scroll phone
    document
        .querySelector('.phone-container')
        .style.overflow = 'auto';
}
</script>