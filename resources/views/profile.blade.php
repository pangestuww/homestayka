<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Profile - Homestayka</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid #e2e8f0;
        }

        .profile-card {
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
        }
    </style>

</head>


<body class="bg-slate-50 text-slate-800">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="relative z-50">

        <nav class="glass-nav">

            <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

                <div class="h-[88px] flex items-center justify-between">


                    {{-- LOGO --}}

                    <a
                        href="{{ route('home') }}"
                        class="flex items-center gap-3 group">

                        <div class="w-12 h-12 flex items-center justify-center">

                            <svg
                                viewBox="0 0 64 64"
                                class="w-full h-full transition-transform duration-300 group-hover:scale-105"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M8 29.5L32 9L56 29.5"
                                    stroke="#2563EB"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />

                                <path
                                    d="M14 27V49C14 50.1 14.9 51 16 51H48C49.1 51 50 50.1 50 49V27"
                                    stroke="#2563EB"
                                    stroke-width="4"
                                    stroke-linejoin="round" />

                                <path
                                    d="M27 51V38C27 36.9 27.9 36 29 36H35C36.1 36 37 36.9 37 38V51"
                                    stroke="#2563EB"
                                    stroke-width="3.5"
                                    stroke-linejoin="round" />

                                <path
                                    d="M20 31H26V37H20V31Z"
                                    fill="#2563EB" />

                                <path
                                    d="M38 31H44V37H38V31Z"
                                    fill="#2563EB" />

                                <path
                                    d="M8 54C15 49.5 21 59 29 54C37 49 43 58.5 56 52.5"
                                    stroke="#38BDF8"
                                    stroke-width="3.5"
                                    stroke-linecap="round" />

                            </svg>

                        </div>


                        <span class="text-2xl text-slate-900 tracking-tight">

                            Homestayka

                        </span>

                    </a>



                    {{-- DESKTOP NAVBAR --}}

                    <div class="hidden lg:flex items-center gap-9">


                        <a
                            href="{{ route('home') }}"
                            class="py-2 text-slate-600 hover:text-blue-600 transition">

                            Home

                        </a>


                        <a
                            href="{{ route('explore') }}"
                            class="py-2 text-slate-600 hover:text-blue-600 transition">

                            Explore

                        </a>


                        <a
                            href="{{ route('properties.index') }}"
                            class="py-2 text-slate-600 hover:text-blue-600 transition">

                            Penginapan

                        </a>


                        <a
                            href="{{ route('profile') }}"
                            class="relative py-2 text-blue-600">

                            Profile

                            <span
                                class="absolute left-0 right-0 -bottom-1 mx-auto h-0.5 w-8 rounded-full bg-blue-600">
                            </span>

                        </a>


                        {{-- AVATAR --}}

                        <a
                            href="{{ route('profile') }}"
                            class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition">

                            {{ strtoupper(substr($user->name, 0, 1)) }}

                        </a>

                    </div>



                    {{-- MOBILE BUTTON --}}

                    <button
                        id="mobileMenuButton"
                        type="button"
                        class="lg:hidden w-11 h-11 rounded-xl border border-slate-200 text-slate-700 flex items-center justify-center">

                        <svg
                            class="w-6 h-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path d="M4 7h16"></path>

                            <path d="M4 12h16"></path>

                            <path d="M4 17h16"></path>

                        </svg>

                    </button>

                </div>



                {{-- MOBILE MENU --}}

                <div
                    id="mobileMenu"
                    class="hidden lg:hidden pb-5">

                    <div
                        class="rounded-2xl bg-white p-4 shadow-xl border border-slate-100 space-y-2">

                        <a
                            href="{{ route('home') }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">

                            Home

                        </a>


                        <a
                            href="{{ route('explore') }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">

                            Explore

                        </a>


                        <a
                            href="{{ route('properties.index') }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">

                            Penginapan

                        </a>


                        <a
                            href="{{ route('profile') }}"
                            class="block px-4 py-3 rounded-xl bg-blue-50 text-blue-700">

                            Profile

                        </a>

                    </div>

                </div>

            </div>

        </nav>

    </header>



    {{-- =====================================================
         PROFILE HEADER
    ====================================================== --}}

    <section
        class="bg-gradient-to-br from-blue-700 via-blue-600 to-sky-500">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-16">

            <div
                class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">


                <div
                    class="flex items-center gap-5">


                    {{-- AVATAR BESAR --}}

                    <div
                        class="w-24 h-24 sm:w-28 sm:h-28 rounded-full bg-white/20 border border-white/40 flex items-center justify-center text-white text-4xl shadow-xl">

                        {{ strtoupper(substr($user->name, 0, 1)) }}

                    </div>


                    <div class="text-white">

                        <p class="text-blue-100 text-sm mb-1">

                            Profil Saya

                        </p>


                        <h1 class="text-3xl sm:text-4xl tracking-tight">

                            {{ $user->name }}

                        </h1>


                        <p class="mt-2 text-blue-100">

                            {{ $user->email }}

                        </p>

                    </div>

                </div>



                {{-- EDIT BUTTON --}}

                <a
                    href="{{ route('profile.edit') }}"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white text-blue-700 hover:bg-blue-50 transition">

                    <svg
                        class="w-5 h-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8">

                        <path d="M12 20h9"></path>

                        <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z"></path>

                    </svg>

                    Edit Profil

                </a>

            </div>

        </div>

    </section>



    {{-- =====================================================
         PROFILE CONTENT
    ====================================================== --}}

    <main
        class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-12">


        <div
            class="grid lg:grid-cols-3 gap-7">


            {{-- =================================================
                 PROFILE COMPLETENESS
            ================================================== --}}

            <div
                class="profile-card bg-white rounded-3xl border border-slate-100 p-7">


                <div
                    class="flex items-center justify-between">

                    <div>

                        <p class="text-sm text-slate-500">

                            Kelengkapan Profil

                        </p>


                        <h2 class="text-3xl text-slate-900 mt-1">

                            {{ $profilePercentage }}%

                        </h2>

                    </div>


                    <div
                        class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center">

                        <svg
                            class="w-7 h-7"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <circle
                                cx="12"
                                cy="12"
                                r="8">
                            </circle>

                            <path
                                d="M8.5 12 11 14.5 16 9.5">
                            </path>

                        </svg>

                    </div>

                </div>



                {{-- PROGRESS BAR --}}

                <div class="mt-7">

                    <div
                        class="h-3 bg-slate-100 rounded-full overflow-hidden">

                        <div
                            class="h-full bg-blue-600 rounded-full transition-all"
                            @style([ 'width'=> $profilePercentage . '%'
                            ])>
                        </div>

                    </div>

                </div>



                {{-- STATUS PROFIL --}}

                @if($profileComplete)

                <div
                    class="mt-6 rounded-2xl bg-emerald-50 border border-emerald-100 p-4 flex gap-3">

                    <div
                        class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">

                        <svg
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path d="m5 12 4 4L19 6"></path>

                        </svg>

                    </div>


                    <div>

                        <p class="text-sm text-emerald-700">

                            Profil sudah lengkap

                        </p>


                        <p class="text-xs text-emerald-600 mt-1">

                            Data kamu sudah terisi dengan lengkap.

                        </p>

                    </div>

                </div>

                @else

                <div
                    class="mt-6 rounded-2xl bg-blue-50 border border-blue-100 p-4">

                    <p class="text-sm text-blue-700">

                        Lengkapi profil kamu

                    </p>


                    <p class="text-xs text-blue-600 mt-1">

                        Lengkapi data profil agar proses pemesanan
                        menjadi lebih mudah.

                    </p>

                </div>

                @endif

            </div>



            {{-- =================================================
                 PERSONAL INFORMATION
            ================================================== --}}

            <div
                class="lg:col-span-2 profile-card bg-white rounded-3xl border border-slate-100 p-7">


                <div
                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7">


                    <div>

                        <p class="text-sm text-blue-600">

                            INFORMASI AKUN

                        </p>


                        <h2 class="text-2xl text-slate-900 mt-1">

                            Data Pribadi

                        </h2>

                    </div>


                    <a
                        href="{{ route('profile.edit') }}"
                        class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 transition">

                        Edit

                        <svg
                            class="w-4 h-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path d="M5 12h14"></path>

                            <path d="M13 6l6 6-6 6"></path>

                        </svg>

                    </a>

                </div>



                <div
                    class="grid sm:grid-cols-2 gap-x-8 gap-y-7">


                    {{-- NAMA --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Nama Lengkap

                        </p>


                        <div class="flex items-center gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <circle
                                        cx="12"
                                        cy="8"
                                        r="3.2">
                                    </circle>

                                    <path
                                        d="M5.5 20c.8-3.5 3-5.2 6.5-5.2s5.7 1.7 6.5 5.2">
                                    </path>

                                </svg>

                            </div>


                            <p class="text-slate-900">

                                {{ $user->name ?: '-' }}

                            </p>

                        </div>

                    </div>



                    {{-- EMAIL --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Email

                        </p>


                        <div class="flex items-center gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <rect
                                        x="3"
                                        y="5"
                                        width="18"
                                        height="14"
                                        rx="2">
                                    </rect>

                                    <path d="m4 7 8 6 8-6"></path>

                                </svg>

                            </div>


                            <p class="text-slate-900 break-all">

                                {{ $user->email ?: '-' }}

                            </p>

                        </div>

                    </div>



                    {{-- PHONE --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Nomor HP

                        </p>


                        <div class="flex items-center gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path
                                        d="M6.5 3h3l1.5 4-2 1.5a15 15 0 0 0 6.5 6.5l1.5-2 4 1.5v3c0 1.1-.9 2-2 2C11.3 19.5 4.5 12.7 4.5 4.5c0-.8.9-1.5 2-1.5Z">
                                    </path>

                                </svg>

                            </div>


                            <p class="text-slate-900">

                                {{ $user->phone ?: '-' }}

                            </p>

                        </div>

                    </div>



                    {{-- GENDER --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Jenis Kelamin

                        </p>


                        <div class="flex items-center gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <circle
                                        cx="9"
                                        cy="9"
                                        r="3">
                                    </circle>

                                    <path
                                        d="M3.5 20c.6-3.1 2.4-4.7 5.5-4.7s4.9 1.6 5.5 4.7">
                                    </path>

                                    <path d="M17 5v6"></path>

                                    <path d="M14 8h6"></path>

                                </svg>

                            </div>


                            <p class="text-slate-900">

                                {{ $user->gender ?: '-' }}

                            </p>

                        </div>

                    </div>



                    {{-- BIRTH DATE --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Tanggal Lahir

                        </p>


                        <div class="flex items-center gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <rect
                                        x="3.5"
                                        y="5"
                                        width="17"
                                        height="16"
                                        rx="2">
                                    </rect>

                                    <path d="M16 3v4"></path>

                                    <path d="M8 3v4"></path>

                                    <path d="M3.5 10h17"></path>

                                </svg>

                            </div>


                            <p class="text-slate-900">

                                @if($user->birth_date)

                                {{ \Carbon\Carbon::parse($user->birth_date)->translatedFormat('d F Y') }}

                                @else

                                -

                                @endif

                            </p>

                        </div>

                    </div>



                    {{-- ADDRESS --}}

                    <div>

                        <p class="text-xs text-slate-500 mb-2">

                            Alamat

                        </p>


                        <div class="flex items-start gap-3">

                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path
                                        d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z">
                                    </path>

                                    <circle
                                        cx="12"
                                        cy="10"
                                        r="2.5">
                                    </circle>

                                </svg>

                            </div>


                            <p class="text-slate-900 leading-relaxed">

                                {{ $user->address ?: '-' }}

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
             ACCOUNT SETTINGS
        ====================================================== --}}

        <div
            class="mt-8 bg-white rounded-3xl border border-slate-100 profile-card p-7">


            <div
                class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">


                <div>

                    <p class="text-sm text-slate-500">

                        Pengaturan Akun

                    </p>


                    <h2 class="text-xl text-slate-900 mt-1">

                        Kelola akun Homestayka

                    </h2>


                    <p class="text-sm text-slate-500 mt-2">

                        Kamu dapat keluar dari akun atau menghapus
                        akun secara permanen.

                    </p>

                </div>



                <div
                    class="flex flex-col sm:flex-row gap-3">


                    {{-- LOGOUT --}}

                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition">

                            <svg
                                class="w-5 h-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8">

                                <path d="M10 17l5-5-5-5"></path>

                                <path d="M15 12H3"></path>

                                <path d="M14 4h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-4"></path>

                            </svg>

                            Logout

                        </button>

                    </form>



                    {{-- DELETE ACCOUNT --}}

                    <form
                        action="{{ route('profile.destroy') }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus akun? Akun kamu akan dihapus secara permanen dari database.')">

                        @csrf

                        @method('DELETE')

                        <button
                            type="submit"
                            class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-red-50 text-red-600 border border-red-100 hover:bg-red-100 transition">

                            <svg
                                class="w-5 h-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8">

                                <path d="M4 7h16"></path>

                                <path d="M10 11v6"></path>

                                <path d="M14 11v6"></path>

                                <path d="M6 7l1 13h10l1-13"></path>

                                <path d="M9 7V4h6v3"></path>

                            </svg>

                            Hapus Akun

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="bg-slate-950 text-slate-300">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-12">


            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">


                {{-- BRAND --}}

                <div class="lg:col-span-2">

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex items-center gap-3">


                        <div class="w-11 h-11">

                            <svg
                                viewBox="0 0 64 64"
                                class="w-full h-full"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <path
                                    d="M8 29.5L32 9L56 29.5"
                                    stroke="white"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />

                                <path
                                    d="M14 27V49C14 50.1 14.9 51 16 51H48C49.1 51 50 50.1 50 49V27"
                                    stroke="white"
                                    stroke-width="4"
                                    stroke-linejoin="round" />

                                <path
                                    d="M27 51V38C27 36.9 27.9 36 29 36H35C36.1 36 37 36.9 37 38V51"
                                    stroke="white"
                                    stroke-width="3.5"
                                    stroke-linejoin="round" />

                                <path
                                    d="M20 31H26V37H20V31Z"
                                    fill="white" />

                                <path
                                    d="M38 31H44V37H38V31Z"
                                    fill="white" />

                                <path
                                    d="M8 54C15 49.5 21 59 29 54C37 49 43 58.5 56 52.5"
                                    stroke="#7DD3FC"
                                    stroke-width="3.5"
                                    stroke-linecap="round" />

                            </svg>

                        </div>


                        <span class="text-2xl text-white">

                            Homestayka

                        </span>

                    </a>


                    <p
                        class="mt-4 text-slate-400 max-w-md leading-relaxed">

                        Platform pencarian dan pemesanan hotel,
                        villa, dan kost untuk perjalanan yang lebih nyaman.

                    </p>

                </div>



                {{-- NAVIGATION --}}

                <div>

                    <h3 class="text-white mb-5">

                        Navigasi

                    </h3>


                    <div
                        class="flex flex-col gap-3 text-slate-400">


                        <a
                            href="{{ route('home') }}"
                            class="hover:text-white transition">

                            Home

                        </a>


                        <a
                            href="{{ route('explore') }}"
                            class="hover:text-white transition">

                            Explore

                        </a>


                        <a
                            href="{{ route('properties.index') }}"
                            class="hover:text-white transition">

                            Penginapan

                        </a>


                        <a
                            href="{{ route('profile') }}"
                            class="hover:text-white transition">

                            Profile

                        </a>

                    </div>

                </div>



                {{-- PENGINAPAN --}}

                <div>

                    <h3 class="text-white mb-5">

                        Penginapan

                    </h3>


                    <div
                        class="flex flex-col gap-3 text-slate-400">

                        <a
                            href="{{ route('properties.index') }}?type=hotel"
                            class="hover:text-white transition">

                            Hotel

                        </a>

                    </div>

                </div>

            </div>



            {{-- COPYRIGHT --}}

            <div
                class="border-t border-white/10 mt-10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-slate-500">

                <p>

                    © {{ date('Y') }} Homestayka.
                    All rights reserved.

                </p>


                <p>

                    Temukan tempat terbaik untuk perjalananmu.

                </p>

            </div>

        </div>

    </footer>



    {{-- =====================================================
         MOBILE MENU SCRIPT
    ====================================================== --}}

    <script>
        const mobileMenuButton =
            document.getElementById('mobileMenuButton');

        const mobileMenu =
            document.getElementById('mobileMenu');


        if (mobileMenuButton && mobileMenu) {

            mobileMenuButton.addEventListener(
                'click',
                function() {

                    mobileMenu.classList.toggle('hidden');

                }
            );

        }
    </script>


</body>

</html>