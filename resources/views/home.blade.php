<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homestayka - Temukan Penginapan Terbaik</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
        }

        .hero {
            background-image:
                linear-gradient(90deg,
                    rgba(7, 29, 58, 0.86) 0%,
                    rgba(7, 29, 58, 0.55) 48%,
                    rgba(7, 29, 58, 0.12) 100%),
                url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2200&q=85');

            background-size: cover;
            background-position: center;
        }

        .glass {
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .destination-card {
            transition: all .3s ease;
        }

        .destination-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 45px rgba(15, 23, 42, .18);
        }

        .property-card {
            transition: all .3s ease;
        }

        .property-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(15, 23, 42, .12);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800">

    {{-- =====================================================
         NAVBAR
    ====================================================== --}}
    <header class="absolute top-0 left-0 right-0 z-50">

        <nav class="glass">

            <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

                <div class="h-[88px] flex items-center justify-between">

                    {{-- LOGO --}}
                    <a href="{{ route('home') }}"
                        class="flex items-center gap-3 group">

                        <div class="w-12 h-12 flex items-center justify-center">

                            <svg
                                viewBox="0 0 64 64"
                                class="w-full h-full transition-transform duration-300 group-hover:scale-105"
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

                        <span class="text-2xl text-white tracking-tight">
                            Homestayka
                        </span>

                    </a>


                    {{-- MENU DESKTOP --}}
                    <div class="hidden lg:flex items-center gap-9 text-white">

                        <a
                            href="{{ route('home') }}"
                            class="relative py-2 text-blue-200">

                            Home

                            <span
                                class="absolute left-0 right-0 -bottom-1 mx-auto h-0.5 w-8 rounded-full bg-blue-300">
                            </span>

                        </a>


                        <a
                            href="{{ route('explore') }}"
                            class="py-2 hover:text-blue-200 transition">

                            Explore

                        </a>


                        <a
                            href="{{ route('properties.index') }}"
                            class="py-2 hover:text-blue-200 transition">

                            Penginapan

                        </a>


                        @auth

                        <a
                            href="{{ route('profile') }}"
                            class="flex items-center gap-2 py-2 hover:text-blue-200 transition">

                            <span
                                class="w-9 h-9 rounded-full bg-white/20 border border-white/30 flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <circle
                                        cx="12"
                                        cy="8"
                                        r="3.5">
                                    </circle>

                                    <path
                                        d="M5.5 20c.8-3.2 3.1-5 6.5-5s5.7 1.8 6.5 5">
                                    </path>

                                </svg>

                            </span>

                            Profile

                        </a>

                        @else

                        <a
                            href="{{ route('login') }}"
                            class="px-6 py-2.5 rounded-full border border-blue-300 text-white hover:bg-white hover:text-blue-700 transition">

                            Login

                        </a>


                        <a
                            href="{{ route('register') }}"
                            class="px-6 py-2.5 rounded-full bg-blue-600 text-white hover:bg-blue-500 transition shadow-lg">

                            Daftar

                        </a>

                        @endauth

                    </div>


                    {{-- MOBILE BUTTON --}}
                    <button
                        id="mobileMenuButton"
                        type="button"
                        class="lg:hidden w-11 h-11 rounded-xl border border-white/30 text-white flex items-center justify-center">

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

                    <div class="rounded-2xl bg-white p-4 shadow-2xl space-y-2">

                        <a
                            href="{{ route('home') }}"
                            class="block px-4 py-3 rounded-xl bg-blue-50 text-blue-700">

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

                        @auth

                        <a
                            href="{{ route('profile') }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">

                            Profile

                        </a>

                        @else

                        <a
                            href="{{ route('login') }}"
                            class="block px-4 py-3 rounded-xl hover:bg-slate-100">

                            Login

                        </a>

                        <a
                            href="{{ route('register') }}"
                            class="block px-4 py-3 rounded-xl bg-blue-600 text-white">

                            Daftar

                        </a>

                        @endauth

                    </div>

                </div>

            </div>

        </nav>

    </header>



    {{-- =====================================================
         HERO
    ====================================================== --}}
    <section
        class="hero min-h-[720px] lg:min-h-[760px] flex items-center">

        <div class="max-w-7xl mx-auto w-full px-5 sm:px-8 lg:px-10 pt-28 pb-20">

            <div class="max-w-3xl">

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 border border-white/20 text-white text-sm backdrop-blur-md mb-6">

                    <span
                        class="w-2 h-2 rounded-full bg-emerald-300">
                    </span>

                    Penginapan pilihan di Indonesia

                </div>


                <h1
                    class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl leading-tight text-white tracking-tight">

                    Temukan Penginapan

                    <br>

                    <span class="text-blue-200">
                        Terbaik untuk Perjalananmu
                    </span>

                </h1>


                <p
                    class="mt-6 max-w-2xl text-lg sm:text-xl leading-relaxed text-white/85">

                    Hotel terbaik dengan harga terjangkau
                    untuk pengalaman menginap yang lebih menyenangkan.

                </p>


                {{-- SEARCH BOX --}}
                <form
                    action="{{ route('properties.index') }}"
                    method="GET"
                    class="mt-10 bg-white rounded-3xl p-3 sm:p-4 shadow-2xl">

                    <div
                        class="grid grid-cols-1 md:grid-cols-[1.1fr_1fr_.8fr_auto] items-stretch">


                        {{-- LOCATION --}}
                        <div
                            class="flex items-center gap-3 px-4 py-3 md:border-r border-slate-200">

                            <div
                                class="w-11 h-11 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

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


                            <div class="min-w-0">

                                <label
                                    for="city"
                                    class="block text-xs text-slate-500">

                                    Lokasi

                                </label>

                                <input
                                    id="city"
                                    name="city"
                                    type="text"
                                    placeholder="Cari kota atau daerah..."
                                    class="w-full bg-transparent outline-none text-sm text-slate-800 placeholder:text-slate-400 mt-1">

                            </div>

                        </div>


                        {{-- DATE --}}
                        <div
                            class="flex items-center gap-3 px-4 py-3 md:border-r border-slate-200">

                            <div
                                class="w-11 h-11 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

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


                            <div>

                                <span
                                    class="block text-xs text-slate-500">

                                    Check-in / Check-out

                                </span>

                                <span
                                    class="block text-sm text-slate-800 mt-1">

                                    Pilih tanggal...

                                </span>

                            </div>

                        </div>


                        {{-- GUEST --}}
                        <div
                            class="flex items-center gap-3 px-4 py-3 md:border-r border-slate-200">

                            <div
                                class="w-11 h-11 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <circle
                                        cx="12"
                                        cy="7"
                                        r="3.2">
                                    </circle>

                                    <path
                                        d="M5.5 20c.8-3.5 3-5.2 6.5-5.2s5.7 1.7 6.5 5.2">
                                    </path>

                                </svg>

                            </div>


                            <div>

                                <span
                                    class="block text-xs text-slate-500">

                                    Tamu

                                </span>

                                <span
                                    class="block text-sm text-slate-800 mt-1">

                                    1 Tamu

                                </span>

                            </div>

                        </div>


                        {{-- SEARCH BUTTON --}}
                        <button
                            type="submit"
                            class="m-1 md:m-0 md:ml-2 rounded-2xl bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 flex items-center justify-center gap-2 transition">

                            <svg
                                class="w-5 h-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.9">

                                <circle
                                    cx="11"
                                    cy="11"
                                    r="6.5">
                                </circle>

                                <path
                                    d="m16 16 4.5 4.5">
                                </path>

                            </svg>

                            Cari Penginapan

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>



    {{-- =====================================================
         CATEGORY / FEATURES
    ====================================================== --}}
    <section class="bg-white border-b border-slate-100">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-9">

            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-7 lg:gap-0">


                {{-- HOTEL --}}
                <a
                    href="{{ route('properties.index') }}?type=hotel"
                    class="flex items-center gap-4 lg:border-r border-slate-200 lg:pr-8">

                    <div
                        class="w-14 h-14 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                        <svg
                            class="w-7 h-7"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path
                                d="M4 20V8.5A1.5 1.5 0 0 1 5.5 7h13A1.5 1.5 0 0 1 20 8.5V20">
                            </path>

                            <path d="M4 13h16"></path>
                            <path d="M8 7V4h8v3"></path>
                            <path d="M7 16h2"></path>
                            <path d="M15 16h2"></path>

                        </svg>

                    </div>


                    <div>

                        <h3 class="text-base text-slate-900">
                            Hotel
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            Nyaman & Strategis
                        </p>

                    </div>

                </a>



                {{-- TRUST --}}
                <div
                    class="flex items-center gap-4 lg:pl-8">

                    <div
                        class="w-14 h-14 rounded-full bg-sky-50 text-sky-600 flex items-center justify-center shrink-0">

                        <svg
                            class="w-7 h-7"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path
                                d="M12 3 20 6v5c0 5.2-3.4 8.6-8 10-4.6-1.4-8-4.8-8-10V6l8-3Z">
                            </path>

                            <path
                                d="m8.5 12 2.2 2.2 4.8-5">
                            </path>

                        </svg>

                    </div>


                    <div>

                        <h3 class="text-base text-slate-900">
                            Aman & Terpercaya
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            Pembayaran & data terlindungi
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         DESTINASI
    ====================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">


            <div
                class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-10">

                <div>

                    <p class="text-blue-600 text-sm tracking-wide">
                        DESTINASI POPULER
                    </p>

                    <h2
                        class="mt-2 text-3xl sm:text-4xl text-slate-900 tracking-tight">

                        Mau pergi ke mana?

                    </h2>

                    <p class="mt-3 text-slate-500">
                        Jelajahi berbagai pilihan penginapan di destinasi populer Indonesia.
                    </p>

                </div>


                <a
                    href="{{ route('explore') }}"
                    class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 transition">

                    Lihat peta

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
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">


                {{-- BALI --}}
                <a
                    href="{{ route('properties.index') }}?city=Bali"
                    class="destination-card relative h-72 rounded-3xl overflow-hidden group">

                    <img
                        src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&q=85"
                        alt="Bali"
                        class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/10 to-transparent">
                    </div>

                    <div
                        class="absolute left-5 right-5 bottom-5 text-white">

                        <div
                            class="flex items-end justify-between gap-3">

                            <div>

                                <h3 class="text-2xl">
                                    Bali
                                </h3>

                                <p class="text-sm text-white/80 mt-1">
                                    Hotel
                                </p>

                            </div>

                            <span
                                class="w-10 h-10 rounded-full border border-white/40 bg-white/10 backdrop-blur flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M5 12h14"></path>
                                    <path d="M13 6l6 6-6 6"></path>

                                </svg>

                            </span>

                        </div>

                    </div>

                </a>



                {{-- BANDUNG --}}
                <a
                    href="{{ route('properties.index') }}?city=Bandung"
                    class="destination-card relative h-72 rounded-3xl overflow-hidden group">

                    <img
                        src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=900&q=85"
                        alt="Bandung"
                        class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/10 to-transparent">
                    </div>

                    <div
                        class="absolute left-5 right-5 bottom-5 text-white">

                        <div
                            class="flex items-end justify-between gap-3">

                            <div>

                                <h3 class="text-2xl">
                                    Bandung
                                </h3>

                                <p class="text-sm text-white/80 mt-1">
                                    Hotel
                                </p>

                            </div>

                            <span
                                class="w-10 h-10 rounded-full border border-white/40 bg-white/10 backdrop-blur flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M5 12h14"></path>
                                    <path d="M13 6l6 6-6 6"></path>

                                </svg>

                            </span>

                        </div>

                    </div>

                </a>



                {{-- YOGYAKARTA --}}
                <a
                    href="{{ route('properties.index') }}?city=Yogyakarta"
                    class="destination-card relative h-72 rounded-3xl overflow-hidden group">

                    <img
                        src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd?auto=format&fit=crop&w=900&q=85"
                        alt="Yogyakarta"
                        class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/10 to-transparent">
                    </div>

                    <div
                        class="absolute left-5 right-5 bottom-5 text-white">

                        <div
                            class="flex items-end justify-between gap-3">

                            <div>

                                <h3 class="text-2xl">
                                    Yogyakarta
                                </h3>

                                <p class="text-sm text-white/80 mt-1">
                                    Hotel
                                </p>

                            </div>

                            <span
                                class="w-10 h-10 rounded-full border border-white/40 bg-white/10 backdrop-blur flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M5 12h14"></path>
                                    <path d="M13 6l6 6-6 6"></path>

                                </svg>

                            </span>

                        </div>

                    </div>

                </a>



                {{-- JAKARTA --}}
                <a
                    href="{{ route('properties.index') }}?city=Jakarta"
                    class="destination-card relative h-72 rounded-3xl overflow-hidden group">

                    <img
                        src="https://images.unsplash.com/photo-1555899434-94d1368aa7af?auto=format&fit=crop&w=900&q=85"
                        alt="Jakarta"
                        class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/10 to-transparent">
                    </div>

                    <div
                        class="absolute left-5 right-5 bottom-5 text-white">

                        <div
                            class="flex items-end justify-between gap-3">

                            <div>

                                <h3 class="text-2xl">
                                    Jakarta
                                </h3>

                                <p class="text-sm text-white/80 mt-1">
                                    Hotel
                                </p>

                            </div>

                            <span
                                class="w-10 h-10 rounded-full border border-white/40 bg-white/10 backdrop-blur flex items-center justify-center">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <path d="M5 12h14"></path>
                                    <path d="M13 6l6 6-6 6"></path>

                                </svg>

                            </span>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>



    {{-- =====================================================
         WHY HOMESTAYKA
    ====================================================== --}}
    <section class="py-20 lg:py-24 bg-white">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

            <div
                class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">


                {{-- TEXT --}}
                <div>

                    <p class="text-blue-600 text-sm tracking-wide">
                        KENAPA HOMESTAYKA?
                    </p>

                    <h2
                        class="mt-3 text-3xl sm:text-4xl text-slate-900 tracking-tight">

                        Semua kebutuhan menginap,

                        <span class="text-blue-600">
                            dalam satu tempat.
                        </span>

                    </h2>

                    <p
                        class="mt-5 text-slate-500 leading-relaxed max-w-xl">

                        Homestayka membantu kamu menemukan penginapan yang sesuai,
                        melihat lokasinya di peta, melakukan pemesanan,
                        dan mengelola perjalanan dengan lebih mudah.

                    </p>


                    <div class="mt-9 space-y-5">


                        {{-- FEATURE 1 --}}
                        <div class="flex gap-4">

                            <div
                                class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
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
                                        d="m8.5 12 2.2 2.2 4.8-5">
                                    </path>

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-slate-900">
                                    Pilihan penginapan beragam
                                </h3>

                                <p class="text-sm text-slate-500 mt-1">
                                    Hotel dari berbagai daerah.
                                </p>

                            </div>

                        </div>


                        {{-- FEATURE 2 --}}
                        <div class="flex gap-4">

                            <div
                                class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

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

                            <div>

                                <h3 class="text-slate-900">
                                    Lokasi jelas di peta
                                </h3>

                                <p class="text-sm text-slate-500 mt-1">
                                    Temukan penginapan berdasarkan lokasi.
                                </p>

                            </div>

                        </div>


                        {{-- FEATURE 3 --}}
                        <div class="flex gap-4">

                            <div
                                class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">

                                <svg
                                    class="w-5 h-5"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8">

                                    <rect
                                        x="4"
                                        y="5"
                                        width="16"
                                        height="15"
                                        rx="2">
                                    </rect>

                                    <path d="M8 3v4"></path>
                                    <path d="M16 3v4"></path>
                                    <path d="M4 10h16"></path>

                                </svg>

                            </div>

                            <div>

                                <h3 class="text-slate-900">
                                    Pemesanan lebih praktis
                                </h3>

                                <p class="text-sm text-slate-500 mt-1">
                                    Kelola semua reservasi dari satu tempat.
                                </p>

                            </div>

                        </div>

                    </div>


                    <a
                        href="{{ route('properties.index') }}"
                        class="inline-flex items-center gap-2 mt-9 px-6 py-3.5 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition">

                        Jelajahi Penginapan

                        <svg
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8">

                            <path d="M5 12h14"></path>
                            <path d="M13 6l6 6-6 6"></path>

                        </svg>

                    </a>

                </div>



                {{-- IMAGE --}}
                <div class="relative">

                    <div
                        class="absolute -top-8 -left-8 w-40 h-40 rounded-full bg-blue-100 blur-3xl opacity-70">
                    </div>

                    <div
                        class="absolute -bottom-8 -right-8 w-40 h-40 rounded-full bg-sky-100 blur-3xl opacity-70">
                    </div>


                    <div
                        class="relative rounded-[2rem] overflow-hidden shadow-2xl">

                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=85"
                            alt="Penginapan Homestayka"
                            class="w-full h-[500px] object-cover">

                    </div>


                    <div
                        class="absolute -bottom-6 left-5 bg-white rounded-2xl shadow-xl px-5 py-4 flex items-center gap-4">

                        <div
                            class="w-11 h-11 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center">

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

                            <p class="text-sm text-slate-500">
                                Pengalaman mudah
                            </p>

                            <p class="text-slate-900">
                                Cari · Pilih · Pesan
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         MAP CTA
    ====================================================== --}}
    <section class="py-20 bg-slate-950">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

            <div
                class="rounded-[2rem] overflow-hidden bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900">

                <div
                    class="grid lg:grid-cols-2 items-center">


                    <div class="p-8 sm:p-12 lg:p-16">

                        <p class="text-blue-200 text-sm tracking-wide">
                            EXPLORE DENGAN PETA
                        </p>

                        <h2
                            class="mt-3 text-3xl sm:text-4xl text-white tracking-tight">

                            Cari penginapan berdasarkan lokasi.

                        </h2>

                        <p
                            class="mt-5 text-blue-100/80 leading-relaxed max-w-xl">

                            Gunakan peta interaktif untuk melihat berbagai
                            penginapan yang tersedia dan menentukan lokasi
                            yang paling cocok untukmu.

                        </p>


                        <a
                            href="{{ route('explore') }}"
                            class="inline-flex items-center gap-2 mt-8 px-6 py-3.5 rounded-xl bg-white text-blue-700 hover:bg-blue-50 transition">

                            Buka Explore Maps

                            <svg
                                class="w-5 h-5"
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
                        class="relative h-[330px] overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1524666041070-9cff5b4e5b0d?auto=format&fit=crop&w=1200&q=85"
                            alt="Explore map"
                            class="absolute inset-0 w-full h-full object-cover opacity-70">

                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-900/20 to-transparent">
                        </div>


                        <div
                            class="absolute inset-0 flex items-center justify-center">

                            <div
                                class="w-16 h-16 rounded-full bg-white shadow-2xl text-blue-600 flex items-center justify-center">

                                <svg
                                    class="w-7 h-7"
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

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         FINAL CTA
    ====================================================== --}}
    <section class="py-20 bg-white">

        <div
            class="max-w-5xl mx-auto px-5 sm:px-8 text-center">

            <p class="text-blue-600 text-sm tracking-wide">
                SIAP UNTUK PERJALANANMU?
            </p>


            <h2
                class="mt-3 text-3xl sm:text-4xl lg:text-5xl text-slate-900 tracking-tight">

                Temukan tempat menginap

                <span class="text-blue-600">
                    yang pas.
                </span>

            </h2>


            <p
                class="mt-5 text-slate-500 max-w-2xl mx-auto leading-relaxed">

                Mulai cari penginapan favoritmu dan buat perjalanan
                jadi lebih nyaman.

            </p>


            <div
                class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">

                <a
                    href="{{ route('properties.index') }}"
                    class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition">

                    Lihat Penginapan

                </a>


                @guest

                <a
                    href="{{ route('register') }}"
                    class="w-full sm:w-auto px-7 py-3.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-50 transition">

                    Buat Akun

                </a>

                @endguest

            </div>

        </div>

    </section>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}
    <footer class="bg-slate-950 text-slate-300">

        <div
            class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 py-14">

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
                        class="mt-5 text-slate-400 leading-relaxed max-w-md">

                        Platform pencarian dan pemesanan hotel
                        untuk membuat perjalananmu lebih nyaman.

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


                        @auth

                        <a
                            href="{{ route('profile') }}"
                            class="hover:text-white transition">

                            Profile

                        </a>

                        @else

                        <a
                            href="{{ route('login') }}"
                            class="hover:text-white transition">

                            Login

                        </a>

                        @endauth

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
                class="border-t border-white/10 mt-12 pt-7 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-slate-500">

                <p>
                    © {{ date('Y') }} Homestayka. All rights reserved.
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

            mobileMenuButton.addEventListener('click', function() {

                mobileMenu.classList.toggle('hidden');

            });

        }
    </script>

</body>

</html>