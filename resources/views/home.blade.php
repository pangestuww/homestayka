<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Homestayka</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>


<body class="bg-white text-gray-900">


    <!-- ===================================================== -->
    <!-- NOTIFICATION -->
    <!-- ===================================================== -->

    @if(session('success'))

    <div
        id="successNotification"
        class="fixed top-6 right-6 z-[9999]">

        <div
            class="bg-white border border-gray-200
                   shadow-2xl rounded-2xl
                   px-6 py-4
                   flex items-center gap-4
                   min-w-[320px]">

            <div
                class="w-10 h-10 rounded-full
                       bg-green-100
                       flex items-center justify-center
                       flex-shrink-0">

                <span class="text-green-600 text-xl">
                    ✓
                </span>

            </div>


            <div>

                <p class="text-xs text-gray-400 mb-1">
                    Berhasil
                </p>

                <p class="text-gray-800">
                    {{ session('success') }}
                </p>

            </div>

        </div>

    </div>


    <script>
        setTimeout(function() {

            const notification =
                document.getElementById('successNotification');

            if (notification) {

                notification.style.transition =
                    'opacity 0.5s ease, transform 0.5s ease';

                notification.style.opacity = '0';

                notification.style.transform =
                    'translateX(30px)';

                setTimeout(function() {

                    notification.remove();

                }, 500);
            }

        }, 3000);
    </script>

    @endif



    <!-- ===================================================== -->
    <!-- NAVBAR -->
    <!-- ===================================================== -->

    <nav class="absolute top-0 left-0 right-0 z-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="h-24 flex items-center justify-between">


                <!-- ================================================= -->
                <!-- LOGO -->
                <!-- ================================================= -->

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3">

                    <div
                        class="w-11 h-11
                           rounded-xl
                           overflow-hidden
                           bg-white">

                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=200&q=80"
                            alt="Homestayka"
                            class="w-full h-full object-cover">

                    </div>


                    <span class="text-2xl text-white">
                        Homestayka
                    </span>

                </a>



                <!-- ================================================= -->
                <!-- MENU -->
                <!-- ================================================= -->

                <div
                    class="hidden lg:flex
                       items-center
                       gap-8
                       text-white">

                    <a
                        href="{{ route('home') }}"
                        class="hover:text-blue-200 transition">
                        Home
                    </a>


                    <a
                        href="{{ route('properties.index') }}"
                        class="hover:text-blue-200 transition">
                        Explore
                    </a>


                    <a
                        href="#destinations"
                        class="hover:text-blue-200 transition">
                        Destinasi
                    </a>


                    <a
                        href="#popular"
                        class="hover:text-blue-200 transition">
                        Penginapan
                    </a>


                    <a
                        href="{{ route('properties.index') }}"
                        class="hover:text-blue-200 transition">
                        Pesanan
                    </a>

                </div>



                <!-- ================================================= -->
                <!-- ACCOUNT -->
                <!-- ================================================= -->

                <div class="flex items-center">

                    @auth

                    <!-- ========================================= -->
                    <!-- PROFILE -->
                    <!-- ========================================= -->

                    <a
                        href="{{ route('profile') }}"
                        class="flex items-center gap-3 group">

                        <!-- AVATAR -->

                        <div
                            class="w-12 h-12
                                   rounded-full
                                   bg-blue-600
                                   border-2 border-white
                                   flex items-center
                                   justify-center
                                   text-white
                                   text-lg
                                   group-hover:bg-blue-700
                                   transition">

                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                        </div>


                        <!-- NAME -->

                        <div class="hidden sm:block">

                            <p class="text-white text-sm">
                                {{ Auth::user()->name }}
                            </p>

                            <p class="text-white/60 text-xs">
                                Profile
                            </p>

                        </div>

                    </a>

                    @else

                    <!-- LOGIN -->

                    <a
                        href="{{ route('login') }}"
                        class="px-5 py-3
                               text-white
                               rounded-xl
                               hover:bg-white/10
                               transition">
                        Login
                    </a>


                    <!-- REGISTER -->

                    <a
                        href="{{ route('register') }}"
                        class="ml-2
                               px-5 py-3
                               bg-white
                               text-blue-700
                               rounded-xl
                               hover:bg-gray-100
                               transition">
                        Daftar
                    </a>

                    @endauth

                </div>

            </div>

        </div>

    </nav>



    <!-- ===================================================== -->
    <!-- HERO -->
    <!-- ===================================================== -->

    <section
        class="relative
           min-h-[760px]
           flex items-center">


        <!-- BACKGROUND -->

        <img
            src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=2000&q=90"
            alt="Homestayka"
            class="absolute inset-0
               w-full h-full
               object-cover">


        <!-- OVERLAY -->

        <div
            class="absolute inset-0
               bg-black/45"></div>



        <!-- CONTENT -->

        <div
            class="relative z-10
               max-w-7xl
               mx-auto
               px-6 lg:px-10
               w-full
               pt-24">

            <div class="max-w-4xl">


                <!-- BADGE -->

                <div
                    class="inline-flex
                       items-center
                       gap-2
                       px-4 py-2
                       rounded-full
                       bg-white/15
                       backdrop-blur-md
                       text-white
                       mb-7">

                    <span>
                        ✦
                    </span>

                    <span>
                        Temukan tempat terbaik untuk menginap
                    </span>

                </div>



                <!-- TITLE -->

                <h1
                    class="text-5xl
                       md:text-6xl
                       lg:text-7xl
                       text-white
                       leading-tight
                       mb-7">

                    Perjalanan dimulai dari

                    <span class="text-blue-300">
                        tempat yang tepat.
                    </span>

                </h1>



                <!-- DESCRIPTION -->

                <p
                    class="text-xl
                       text-white/80
                       max-w-2xl
                       leading-relaxed
                       mb-10">

                    Temukan hotel, villa, dan kost terbaik
                    untuk perjalanan, liburan, maupun
                    kebutuhan tinggal kamu.

                </p>



                <!-- SEARCH -->

                <form
                    action="{{ route('properties.index') }}"
                    method="GET"
                    class="bg-white
                       rounded-3xl
                       p-3
                       shadow-2xl
                       max-w-5xl">

                    <div
                        class="grid
                           grid-cols-1
                           md:grid-cols-4
                           gap-2">


                        <!-- LOCATION -->

                        <div
                            class="px-5 py-4
                               rounded-2xl
                               hover:bg-gray-50
                               transition">

                            <label
                                class="block
                                   text-xs
                                   text-gray-400
                                   mb-1">
                                Lokasi
                            </label>


                            <input
                                type="text"
                                name="city"
                                placeholder="Mau menginap di mana?"
                                class="w-full
                                   outline-none
                                   text-gray-800">

                        </div>



                        <!-- CHECK IN -->

                        <div
                            class="px-5 py-4
                               rounded-2xl
                               hover:bg-gray-50
                               transition">

                            <label
                                class="block
                                   text-xs
                                   text-gray-400
                                   mb-1">
                                Check-in
                            </label>


                            <input
                                type="date"
                                name="check_in"
                                class="w-full
                                   outline-none
                                   text-gray-800">

                        </div>



                        <!-- CHECK OUT -->

                        <div
                            class="px-5 py-4
                               rounded-2xl
                               hover:bg-gray-50
                               transition">

                            <label
                                class="block
                                   text-xs
                                   text-gray-400
                                   mb-1">
                                Check-out
                            </label>


                            <input
                                type="date"
                                name="check_out"
                                class="w-full
                                   outline-none
                                   text-gray-800">

                        </div>



                        <!-- BUTTON -->

                        <button
                            type="submit"
                            class="bg-blue-600
                               text-white
                               rounded-2xl
                               px-6 py-4
                               hover:bg-blue-700
                               transition">
                            Cari Penginapan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- CATEGORY -->
    <!-- ===================================================== -->

    <section class="py-20">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div
                class="flex
                   flex-col
                   md:flex-row
                   md:items-end
                   md:justify-between
                   gap-5
                   mb-10">

                <div>

                    <p class="text-blue-600 mb-3">
                        PILIHAN UNTUKMU
                    </p>

                    <h2 class="text-4xl">
                        Cari sesuai kebutuhan
                    </h2>

                </div>


                <a
                    href="{{ route('properties.index') }}"
                    class="text-blue-600
                       hover:text-blue-700">
                    Lihat semua →
                </a>

            </div>



            <div
                class="grid
                   grid-cols-1
                   md:grid-cols-3
                   gap-7">


                <!-- HOTEL -->

                <a
                    href="{{ route('properties.index') }}?type=hotel"
                    class="group
                       relative
                       h-80
                       rounded-3xl
                       overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1000&q=90"
                        alt="Hotel"
                        class="absolute inset-0
                           w-full h-full
                           object-cover
                           group-hover:scale-105
                           transition
                           duration-500">


                    <div
                        class="absolute inset-0
                           bg-gradient-to-t
                           from-black/75
                           to-transparent"></div>


                    <div
                        class="absolute
                           bottom-0
                           left-0
                           right-0
                           p-7
                           text-white">

                        <p class="text-sm text-white/70 mb-2">
                            PILIHAN POPULER
                        </p>

                        <h3 class="text-3xl mb-2">
                            Hotel
                        </h3>

                        <p class="text-white/80">
                            Hotel nyaman untuk perjalananmu.
                        </p>

                    </div>

                </a>



                <!-- VILLA -->

                <a
                    href="{{ route('properties.index') }}?type=villa"
                    class="group
                       relative
                       h-80
                       rounded-3xl
                       overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1601918774946-25832a4be0d6?auto=format&fit=crop&w=1000&q=90"
                        alt="Villa"
                        class="absolute inset-0
                           w-full h-full
                           object-cover
                           group-hover:scale-105
                           transition
                           duration-500">


                    <div
                        class="absolute inset-0
                           bg-gradient-to-t
                           from-black/75
                           to-transparent"></div>


                    <div
                        class="absolute
                           bottom-0
                           left-0
                           right-0
                           p-7
                           text-white">

                        <p class="text-sm text-white/70 mb-2">
                            UNTUK LIBURAN
                        </p>

                        <h3 class="text-3xl mb-2">
                            Villa
                        </h3>

                        <p class="text-white/80">
                            Tempat privat untuk waktu yang lebih tenang.
                        </p>

                    </div>

                </a>



                <!-- KOST -->

                <a
                    href="{{ route('properties.index') }}?type=kost"
                    class="group
                       relative
                       h-80
                       rounded-3xl
                       overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=1000&q=90"
                        alt="Kost"
                        class="absolute inset-0
                           w-full h-full
                           object-cover
                           group-hover:scale-105
                           transition
                           duration-500">


                    <div
                        class="absolute inset-0
                           bg-gradient-to-t
                           from-black/75
                           to-transparent"></div>


                    <div
                        class="absolute
                           bottom-0
                           left-0
                           right-0
                           p-7
                           text-white">

                        <p class="text-sm text-white/70 mb-2">
                            UNTUK TINGGAL
                        </p>

                        <h3 class="text-3xl mb-2">
                            Kost
                        </h3>

                        <p class="text-white/80">
                            Pilihan tempat tinggal yang praktis.
                        </p>

                    </div>

                </a>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- POPULAR -->
    <!-- ===================================================== -->

    <section
        id="popular"
        class="py-20 bg-gray-50">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div
                class="flex
                   flex-col
                   md:flex-row
                   md:items-end
                   md:justify-between
                   gap-5
                   mb-10">

                <div>

                    <p class="text-blue-600 mb-3">
                        PENGINAPAN POPULER
                    </p>

                    <h2 class="text-4xl">
                        Tempat favorit pengguna
                    </h2>

                </div>


                <a
                    href="{{ route('properties.index') }}"
                    class="text-blue-600">
                    Lihat semua →
                </a>

            </div>



            <div
                class="grid
                   grid-cols-1
                   md:grid-cols-2
                   lg:grid-cols-3
                   gap-7">


                <!-- CARD 1 -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       overflow-hidden
                       border border-gray-100
                       hover:shadow-xl
                       transition
                       group">

                    <div class="h-64 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1000&q=90"
                            alt="Hotel"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <div class="p-6">

                        <div
                            class="flex
                               justify-between
                               items-center
                               mb-3">

                            <span class="text-sm text-blue-600">
                                Hotel
                            </span>

                            <span class="text-sm">
                                ★ 4.8
                            </span>

                        </div>


                        <h3 class="text-xl mb-2">
                            Modern City Hotel
                        </h3>


                        <p class="text-gray-500 text-sm mb-5">
                            Jakarta
                        </p>


                        <div
                            class="flex
                               items-end
                               justify-between">

                            <div>

                                <span class="text-xl">
                                    Rp450.000
                                </span>

                                <span class="text-gray-400 text-sm">
                                    / malam
                                </span>

                            </div>


                            <span class="text-blue-600">
                                →
                            </span>

                        </div>

                    </div>

                </a>



                <!-- CARD 2 -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       overflow-hidden
                       border border-gray-100
                       hover:shadow-xl
                       transition
                       group">

                    <div class="h-64 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=90"
                            alt="Villa"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <div class="p-6">

                        <div
                            class="flex
                               justify-between
                               items-center
                               mb-3">

                            <span class="text-sm text-blue-600">
                                Villa
                            </span>

                            <span class="text-sm">
                                ★ 4.9
                            </span>

                        </div>


                        <h3 class="text-xl mb-2">
                            Tropical Private Villa
                        </h3>


                        <p class="text-gray-500 text-sm mb-5">
                            Bali
                        </p>


                        <div
                            class="flex
                               items-end
                               justify-between">

                            <div>

                                <span class="text-xl">
                                    Rp850.000
                                </span>

                                <span class="text-gray-400 text-sm">
                                    / malam
                                </span>

                            </div>


                            <span class="text-blue-600">
                                →
                            </span>

                        </div>

                    </div>

                </a>



                <!-- CARD 3 -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       overflow-hidden
                       border border-gray-100
                       hover:shadow-xl
                       transition
                       group">

                    <div class="h-64 overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1554995207-c18c203602cb?auto=format&fit=crop&w=1000&q=90"
                            alt="Kost"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <div class="p-6">

                        <div
                            class="flex
                               justify-between
                               items-center
                               mb-3">

                            <span class="text-sm text-blue-600">
                                Kost
                            </span>

                            <span class="text-sm">
                                ★ 4.7
                            </span>

                        </div>


                        <h3 class="text-xl mb-2">
                            Cozy Kost Residence
                        </h3>


                        <p class="text-gray-500 text-sm mb-5">
                            Bandung
                        </p>


                        <div
                            class="flex
                               items-end
                               justify-between">

                            <div>

                                <span class="text-xl">
                                    Rp1.200.000
                                </span>

                                <span class="text-gray-400 text-sm">
                                    / bulan
                                </span>

                            </div>


                            <span class="text-blue-600">
                                →
                            </span>

                        </div>

                    </div>

                </a>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- DESTINATIONS -->
    <!-- ===================================================== -->

    <section
        id="destinations"
        class="py-20">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div class="mb-10">

                <p class="text-blue-600 mb-3">
                    DESTINASI
                </p>

                <h2 class="text-4xl">
                    Mau pergi ke mana?
                </h2>

            </div>



            <div
                class="grid
                   grid-cols-1
                   sm:grid-cols-2
                   lg:grid-cols-4
                   gap-6">


                <!-- BALI -->

                <a
                    href="{{ route('properties.index') }}?city=Bali"
                    class="group">

                    <div
                        class="h-80
                           rounded-3xl
                           overflow-hidden
                           mb-4">

                        <img
                            src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=1000&q=90"
                            alt="Bali"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <h3 class="text-xl">
                        Bali
                    </h3>


                    <p class="text-gray-500 mt-1">
                        Pulau Dewata
                    </p>

                </a>



                <!-- BANDUNG -->

                <a
                    href="{{ route('properties.index') }}?city=Bandung"
                    class="group">

                    <div
                        class="h-80
                           rounded-3xl
                           overflow-hidden
                           mb-4">

                        <img
                            src="https://awsimages.detik.net.id/community/media/visual/2022/07/20/kota-bandung_43.jpeg?w=1200"
                            alt="Bandung"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <h3 class="text-xl">
                        Bandung
                    </h3>


                    <p class="text-gray-500 mt-1">
                        Kota Kembang
                    </p>

                </a>



                <!-- YOGYAKARTA -->

                <a
                    href="{{ route('properties.index') }}?city=Yogyakarta"
                    class="group">

                    <div
                        class="h-80
                           rounded-3xl
                           overflow-hidden
                           mb-4">

                        <img
                            src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&w=1000&q=90"
                            alt="Yogyakarta"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <h3 class="text-xl">
                        Yogyakarta
                    </h3>


                    <p class="text-gray-500 mt-1">
                        Kota Budaya
                    </p>

                </a>



                <!-- JAKARTA -->

                <a
                    href="{{ route('properties.index') }}?city=Jakarta"
                    class="group">

                    <div
                        class="h-80
                           rounded-3xl
                           overflow-hidden
                           mb-4">

                        <img
                            src="https://cdn.visiteliti.com/article/2022-06/16/q83HAOpsQWwL7h5QqyU6_1655361530.jpeg"
                            alt="Jakarta"
                            class="w-full h-full
                               object-cover
                               group-hover:scale-105
                               transition
                               duration-500">

                    </div>


                    <h3 class="text-xl">
                        Jakarta
                    </h3>


                    <p class="text-gray-500 mt-1">
                        Ibu Kota
                    </p>

                </a>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- WHY HOMESTAYKA -->
    <!-- ===================================================== -->

    <section class="py-20 bg-gray-50">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div class="max-w-2xl mb-12">

                <p class="text-blue-600 mb-3">
                    KENAPA HOMESTAYKA?
                </p>

                <h2 class="text-4xl mb-4">
                    Semua yang kamu butuhkan untuk menginap.
                </h2>

                <p class="text-gray-500 text-lg">
                    Kami membuat proses mencari dan memesan
                    tempat menginap menjadi lebih mudah.
                </p>

            </div>



            <div
                class="grid
                   grid-cols-1
                   md:grid-cols-3
                   gap-7">


                <!-- MAPS -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       p-8
                       border border-gray-100
                       hover:shadow-lg
                       transition">

                    <div
                        class="w-14 h-14
                           rounded-2xl
                           bg-blue-50
                           flex items-center
                           justify-center
                           mb-6">

                        <span class="text-blue-600 text-2xl">
                            ⌖
                        </span>

                    </div>


                    <h3 class="text-xl mb-3">
                        Explore dengan Maps
                    </h3>


                    <p class="text-gray-500">
                        Cari penginapan berdasarkan lokasi
                        yang kamu inginkan.
                    </p>

                </a>



                <!-- BOOKING -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       p-8
                       border border-gray-100
                       hover:shadow-lg
                       transition">

                    <div
                        class="w-14 h-14
                           rounded-2xl
                           bg-green-50
                           flex items-center
                           justify-center
                           mb-6">

                        <span class="text-green-600 text-2xl">
                            □
                        </span>

                    </div>


                    <h3 class="text-xl mb-3">
                        Booking Mudah
                    </h3>


                    <p class="text-gray-500">
                        Pilih tempat, tentukan tanggal,
                        lalu lakukan booking.
                    </p>

                </a>



                <!-- REVIEW -->

                <a
                    href="{{ route('properties.index') }}"
                    class="bg-white
                       rounded-3xl
                       p-8
                       border border-gray-100
                       hover:shadow-lg
                       transition">

                    <div
                        class="w-14 h-14
                           rounded-2xl
                           bg-yellow-50
                           flex items-center
                           justify-center
                           mb-6">

                        <span class="text-yellow-500 text-2xl">
                            ★
                        </span>

                    </div>


                    <h3 class="text-xl mb-3">
                        Review & Rating
                    </h3>


                    <p class="text-gray-500">
                        Lihat pengalaman pengguna lain
                        sebelum memilih penginapan.
                    </p>

                </a>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- CTA -->
    <!-- ===================================================== -->

    <section class="py-20">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div
                class="relative
                   rounded-[2rem]
                   overflow-hidden
                   min-h-[400px]
                   flex items-center">

                <img
                    src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1800&q=90"
                    alt="Homestayka"
                    class="absolute inset-0
                       w-full h-full
                       object-cover">


                <div
                    class="absolute inset-0
                       bg-black/55"></div>


                <div
                    class="relative z-10
                       p-10 md:p-16
                       max-w-2xl
                       text-white">

                    <p class="text-blue-300 mb-4">
                        HOMESTAYKA
                    </p>


                    <h2 class="text-4xl md:text-5xl mb-6">
                        Siap menemukan tempat menginapmu?
                    </h2>


                    <p class="text-white/75 text-lg mb-8">
                        Jelajahi berbagai hotel, villa,
                        dan kost yang tersedia.
                    </p>


                    <a
                        href="{{ route('properties.index') }}"
                        class="inline-block
                           px-7 py-4
                           rounded-xl
                           bg-blue-600
                           hover:bg-blue-700
                           transition">
                        Mulai Explore
                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- ===================================================== -->
    <!-- FOOTER -->
    <!-- ===================================================== -->

    <footer class="bg-gray-950 text-white">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10
               py-14">

            <div
                class="grid
                   grid-cols-1
                   md:grid-cols-4
                   gap-10">


                <!-- BRAND -->

                <div class="md:col-span-2">

                    <a
                        href="{{ route('home') }}"
                        class="text-2xl">
                        Homestayka
                    </a>


                    <p
                        class="text-gray-500
                           mt-4
                           max-w-md
                           leading-relaxed">
                        Platform pencarian dan pemesanan hotel,
                        villa, dan kost untuk kebutuhan perjalanan
                        dan tempat tinggal kamu.
                    </p>

                </div>



                <!-- NAVIGATION -->

                <div>

                    <h3 class="mb-5">
                        Navigasi
                    </h3>


                    <div
                        class="flex
                           flex-col
                           gap-3
                           text-gray-500">

                        <a
                            href="{{ route('home') }}"
                            class="hover:text-white transition">
                            Home
                        </a>


                        <a
                            href="{{ route('properties.index') }}"
                            class="hover:text-white transition">
                            Explore
                        </a>


                        <a
                            href="#destinations"
                            class="hover:text-white transition">
                            Destinasi
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



                <!-- PENGINAPAN -->

                <div>

                    <h3 class="mb-5">
                        Penginapan
                    </h3>


                    <div
                        class="flex
                           flex-col
                           gap-3
                           text-gray-500">

                        <a
                            href="{{ route('properties.index') }}?type=hotel"
                            class="hover:text-white transition">
                            Hotel
                        </a>


                        <a
                            href="{{ route('properties.index') }}?type=villa"
                            class="hover:text-white transition">
                            Villa
                        </a>


                        <a
                            href="{{ route('properties.index') }}?type=kost"
                            class="hover:text-white transition">
                            Kost
                        </a>

                    </div>

                </div>

            </div>



            <!-- BOTTOM -->

            <div
                class="border-t
                   border-white/10
                   mt-12
                   pt-7">

                <div
                    class="flex
                       flex-col
                       md:flex-row
                       md:items-center
                       md:justify-between
                       gap-4">

                    <p class="text-gray-600 text-sm">
                        © {{ date('Y') }} Homestayka.
                        All rights reserved.
                    </p>


                    @auth

                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="text-gray-500
                                   hover:text-white
                                   transition
                                   text-sm">
                            Logout
                        </button>

                    </form>

                    @endauth

                </div>

            </div>

        </div>

    </footer>


</body>

</html>