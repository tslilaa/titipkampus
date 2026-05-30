<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Titipin Android</title>

    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen overflow-hidden">

    <!-- Phone Container -->
    <div class="w-full sm:max-w-[420px] h-[100dvh] sm:h-[850px] bg-gradient-to-br from-[#4A7AFF] via-[#8B5CF6] to-[#C850F2] relative overflow-hidden sm:rounded-[3rem] sm:shadow-2xl flex flex-col">

        <!-- Background Blur -->
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-[#60A5FA] opacity-20 rounded-full blur-[80px]"></div>

        <div class="absolute top-[30%] -right-20 w-80 h-80 bg-[#E879F9] opacity-30 rounded-full blur-[80px]"></div>

        <!-- HERO -->
        <div class="relative z-10 flex-1 pt-16 pb-10 px-6 w-full overflow-hidden">

            <!-- LEFT CONTENT -->
            <div class="relative z-20">

                <!-- Logo -->
                <div class="flex items-center gap-2 mb-3 text-white">

                    <img 
                        src="{{ asset('images/ilustrasi-logo.png') }}"
                        alt="Logo Titipin"
                        class="h-10 w-auto object-contain"
                    >

                </div>

                <!-- Heading -->
                <h1 class="text-[30px] font-extrabold text-white leading-[1.05] max-w-[220px] drop-shadow-md">

                    Titip barang jadi lebih mudah, cepat, dan terpercaya.

                </h1>

                <!-- Description -->
                <p class="text-purple-100 text-[15px] leading-relaxed max-w-[170px] mt-5">

                    Platform titip barang antar mahasiswa dalam satu kampus.

                </p>

            </div>

            <!-- RIGHT IMAGE -->

                <img 
                    src="{{ asset('images/ilustrasi-login.png') }}"
                    alt="Ilustrasi"
                    class="absolute bottom-[-35px] right-[-15px] w-[300px] max-w-none h-auto object-contain drop-shadow-2xl pointer-events-none select-none z-10"
                >

        </div>

        <!-- FORM -->
        <div class="bg-[#f9fafb] rounded-t-[2.5rem] px-8 pt-8 pb-10 z-20 relative shadow-[0_-10px_40px_rgba(0,0,0,0.15)] flex-shrink-0">

            <form action="/login" method="POST">
                @csrf

                <!-- NIM -->
                <div class="mb-5">

                    <label 
                        for="nim"
                        class="block text-xs font-bold text-gray-800 mb-2 tracking-wide"
                    >
                        NIM
                    </label>

                    <input 
                        type="text"
                        id="nim"
                        name="nim"
                        placeholder="masukkan NIM"
                        class="w-full px-5 py-3.5 rounded-xl bg-white border border-gray-100 shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition text-sm text-gray-700"
                    >

                </div>

                <!-- PASSWORD -->
                <div class="mb-3 relative">

                    <label 
                        for="password"
                        class="block text-xs font-bold text-gray-800 mb-2 tracking-wide"
                    >
                        Password
                    </label>

                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="masukkan password"
                        class="w-full px-5 py-3.5 rounded-xl bg-white border border-gray-100 shadow-sm focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition text-sm text-gray-700"
                    >

                    <!-- Eye Icon -->
                    <button 
                        type="button"
                        class="absolute right-4 top-[38px] text-gray-400 hover:text-purple-500 transition"
                    >

                        <svg 
                            class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path 
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />

                            <path 
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5
                                   c4.478 0 8.268 2.943 9.542 7
                                   -1.274 4.057-5.064 7-9.542 7
                                   -4.477 0-8.268-2.943-9.542-7z"
                            />

                        </svg>

                    </button>

                </div>

                <!-- Forgot Password -->
                <div class="flex justify-end mb-6">

                    <a 
                        href="#"
                        class="text-[11px] font-semibold text-blue-500 hover:text-blue-700 transition"
                    >
                        Lupa password?
                    </a>

                </div>

                <!-- LOGIN BUTTON -->
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-[#7C3AED] to-[#60A5FA] text-white font-bold py-4 rounded-xl hover:opacity-90 transition duration-300 shadow-lg shadow-purple-500/40 text-sm"
                >
                    Login
                </button>

            </form>

            <!-- Divider -->
            <div class="flex items-center my-6">

                <div class="flex-grow border-t border-gray-300"></div>

                <span class="px-4 text-[11px] text-gray-500 font-medium tracking-wide">
                    atau lanjut dengan
                </span>

                <div class="flex-grow border-t border-gray-300"></div>

            </div>

            <!-- Social -->
            <div class="flex gap-4 mb-6 justify-center">

                <!-- Google -->
                <button class="w-14 h-14 flex items-center justify-center bg-white border border-gray-200 shadow-sm rounded-full hover:bg-gray-50 transition">

                    <img 
                        src="https://www.svgrepo.com/show/475656/google-color.svg"
                        alt="Google"
                        class="w-6 h-6"
                    >

                </button>

                <!-- Facebook -->
                <button class="w-14 h-14 flex items-center justify-center bg-white border border-gray-200 shadow-sm rounded-full hover:bg-gray-50 transition">

                    <img 
                        src="https://www.svgrepo.com/show/475647/facebook-color.svg"
                        alt="Facebook"
                        class="w-6 h-6"
                    >

                </button>

            </div>

            <!-- Register -->
            <p class="text-center text-xs text-gray-600">

                Belum punya akun?

                <a 
                    href="#"
                    class="font-bold text-blue-500 hover:text-blue-700 transition"
                >
                    Daftar di sini
                </a>

            </p>

        </div>

    </div>

</body>
</html>