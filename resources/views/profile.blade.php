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
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>


<body class="bg-gray-50 text-gray-900">


    <!-- ===================================================== -->
    <!-- NOTIFICATION BERHASIL -->
    <!-- ===================================================== -->

    @if(session('success'))

    <div
        id="successNotification"
        class="fixed top-6 right-6 z-50">

        <div
            class="bg-white border border-gray-200 shadow-xl rounded-2xl px-6 py-4 flex items-center gap-4 min-w-[320px]">

            <div
                class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">

                <span class="text-green-600 text-xl">
                    ✓
                </span>

            </div>


            <div>

                <p class="text-xs text-gray-400">
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

    <nav class="bg-white border-b border-gray-100">

        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            <div class="h-20 flex items-center justify-between">


                <!-- LOGO -->

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3">

                    <div
                        class="w-11 h-11 rounded-xl overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=200&q=80"
                            alt="Homestayka"
                            class="w-full h-full object-cover">

                    </div>


                    <div>

                        <p class="text-xl">
                            Homestayka
                        </p>

                        <p class="text-xs text-gray-400">
                            Stay your way
                        </p>

                    </div>

                </a>



                <!-- MENU -->

                <div class="hidden md:flex items-center gap-8">

                    <a
                        href="{{ route('home') }}"
                        class="text-gray-600 hover:text-blue-600 transition">
                        Home
                    </a>


                    <a
                        href="{{ route('properties.index') }}"
                        class="text-gray-600 hover:text-blue-600 transition">
                        Explore
                    </a>


                    <a
                        href="{{ route('home') }}#destinations"
                        class="text-gray-600 hover:text-blue-600 transition">
                        Destinasi
                    </a>


                    <a
                        href="{{ route('properties.index') }}"
                        class="text-gray-600 hover:text-blue-600 transition">
                        Penginapan
                    </a>


                    <a
                        href="{{ route('properties.index') }}"
                        class="text-gray-600 hover:text-blue-600 transition">
                        Pesanan
                    </a>

                </div>



                <!-- USER -->

                <a
                    href="{{ route('profile') }}"
                    class="flex items-center gap-3">

                    <div
                        class="w-11 h-11 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg">

                        {{ strtoupper(substr($user->name, 0, 1)) }}

                    </div>


                    <div class="hidden sm:block">

                        <p class="text-sm">
                            {{ $user->name }}
                        </p>

                        <p class="text-xs text-blue-600">
                            Profile
                        </p>

                    </div>

                </a>

            </div>

        </div>

    </nav>



    <!-- ===================================================== -->
    <!-- MAIN -->
    <!-- ===================================================== -->

    <main class="max-w-6xl mx-auto px-6 py-12">


        <!-- BREADCRUMB -->

        <div class="flex items-center gap-2 text-sm mb-8">

            <a
                href="{{ route('home') }}"
                class="text-gray-400 hover:text-blue-600">
                Home
            </a>


            <span class="text-gray-300">
                /
            </span>


            <span class="text-gray-700">
                Profile
            </span>

        </div>



        <!-- ================================================= -->
        <!-- TITLE -->
        <!-- ================================================= -->

        <div
            class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-8">

            <div>

                <p class="text-blue-600 text-sm mb-2">
                    AKUN SAYA
                </p>

                <h1 class="text-4xl mb-3">
                    Profile
                </h1>

                <p class="text-gray-500">
                    Kelola informasi pribadi akun kamu.
                </p>

            </div>


            <!-- EDIT -->

            <a
                href="{{ route('profile.edit') }}"
                class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700 transition">

                <span class="mr-2">
                    ✎
                </span>

                Edit Profil

            </a>

        </div>



        <!-- ================================================= -->
        <!-- HITUNG KELENGKAPAN PROFILE -->
        <!-- ================================================= -->

        @php

        $completed = 0;

        if ($user->name) {
        $completed++;
        }

        if ($user->email) {
        $completed++;
        }

        if ($user->phone) {
        $completed++;
        }

        if ($user->gender) {
        $completed++;
        }

        if ($user->birth_date) {
        $completed++;
        }

        if ($user->address) {
        $completed++;
        }

        $percentage = round(($completed / 6) * 100);

        $isComplete = $percentage === 100;

        @endphp



        <!-- ================================================= -->
        <!-- STATUS PROFILE -->
        <!-- ================================================= -->

        @if(!$isComplete)

        <div
            class="mb-8 bg-yellow-50 border border-yellow-200 rounded-3xl p-6">

            <div
                class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">


                <!-- PESAN -->

                <div class="flex items-start gap-4">

                    <div
                        class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center flex-shrink-0">

                        <span class="text-yellow-600 text-xl">
                            !
                        </span>

                    </div>


                    <div>

                        <h2 class="text-lg text-yellow-800 mb-1">
                            Profil kamu belum lengkap
                        </h2>


                        <p class="text-sm text-yellow-700">
                            Lengkapi data diri kamu agar akun Homestayka
                            menjadi lebih lengkap.
                        </p>

                    </div>

                </div>



                <!-- PROGRESS -->

                <div class="w-full md:w-52">

                    <div
                        class="flex justify-between text-sm mb-2">

                        <span class="text-yellow-700">
                            Kelengkapan
                        </span>


                        <span class="text-yellow-800">
                            {{ $percentage }}%
                        </span>

                    </div>


                    <!-- PROGRESS BAR -->

                    <div
                        class="w-full h-2 bg-yellow-200 rounded-full overflow-hidden">

                        <div
                            id="profileProgressBar"
                            class="h-full bg-yellow-500 rounded-full"
                            data-progress="{{ $percentage }}"></div>

                    </div>

                </div>

            </div>

        </div>


        @else


        <!-- PROFILE LENGKAP -->

        <div
            class="mb-8 bg-green-50 border border-green-200 rounded-3xl p-6">

            <div class="flex items-center gap-4">

                <div
                    class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">

                    <span class="text-green-600 text-xl">
                        ✓
                    </span>

                </div>


                <div>

                    <h2 class="text-lg text-green-800 mb-1">
                        Profil kamu sudah lengkap
                    </h2>


                    <p class="text-sm text-green-700">
                        Semua informasi pribadi kamu sudah terisi.
                    </p>

                </div>

            </div>

        </div>

        @endif



        <!-- ================================================= -->
        <!-- PROFILE CARD -->
        <!-- ================================================= -->

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">


            <!-- ================================================= -->
            <!-- KARTU KIRI -->
            <!-- ================================================= -->

            <div
                class="bg-white rounded-3xl border border-gray-100 shadow-sm p-8">

                <div class="flex flex-col items-center text-center">


                    <!-- AVATAR -->

                    <div
                        class="w-32 h-32 rounded-full bg-blue-600 text-white text-5xl flex items-center justify-center mb-6">

                        {{ strtoupper(substr($user->name, 0, 1)) }}

                    </div>


                    <h2 class="text-2xl mb-2">
                        {{ $user->name }}
                    </h2>


                    <p class="text-gray-500 mb-5">
                        {{ $user->email }}
                    </p>


                    <div
                        class="px-5 py-2 rounded-full bg-blue-50 text-blue-600 text-sm">

                        Member Homestayka

                    </div>

                </div>

            </div>



            <!-- ================================================= -->
            <!-- INFORMASI PRIBADI -->
            <!-- ================================================= -->

            <div
                class="lg:col-span-2 bg-white rounded-3xl border border-gray-100 shadow-sm p-8">


                <div
                    class="flex items-center justify-between mb-6">

                    <div>

                        <h2 class="text-2xl mb-2">
                            Informasi Pribadi
                        </h2>


                        <p class="text-gray-500">
                            Data diri yang tersimpan di akun kamu.
                        </p>

                    </div>


                    <a
                        href="{{ route('profile.edit') }}"
                        class="text-blue-600 hover:text-blue-700">
                        Edit
                    </a>

                </div>



                <!-- NAMA -->

                <div
                    class="py-5 border-b border-gray-100">

                    <p class="text-sm text-gray-400 mb-2">
                        Nama Lengkap
                    </p>


                    @if($user->name)

                    <p class="text-lg">
                        {{ $user->name }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>



                <!-- EMAIL -->

                <div
                    class="py-5 border-b border-gray-100">

                    <p class="text-sm text-gray-400 mb-2">
                        Email
                    </p>


                    @if($user->email)

                    <p class="text-lg">
                        {{ $user->email }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>



                <!-- NOMOR HP -->

                <div
                    class="py-5 border-b border-gray-100">

                    <p class="text-sm text-gray-400 mb-2">
                        Nomor HP
                    </p>


                    @if($user->phone)

                    <p class="text-lg">
                        {{ $user->phone }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>



                <!-- JENIS KELAMIN -->

                <div
                    class="py-5 border-b border-gray-100">

                    <p class="text-sm text-gray-400 mb-2">
                        Jenis Kelamin
                    </p>


                    @if($user->gender)

                    <p class="text-lg">
                        {{ $user->gender }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>



                <!-- TANGGAL LAHIR -->

                <div
                    class="py-5 border-b border-gray-100">

                    <p class="text-sm text-gray-400 mb-2">
                        Tanggal Lahir
                    </p>


                    @if($user->birth_date)

                    <p class="text-lg">
                        {{ $user->birth_date->format('d-m-Y') }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>



                <!-- ALAMAT -->

                <div class="py-5">

                    <p class="text-sm text-gray-400 mb-2">
                        Alamat
                    </p>


                    @if($user->address)

                    <p class="text-lg">
                        {{ $user->address }}
                    </p>

                    @else

                    <p class="text-yellow-600">
                        Belum diisi
                    </p>

                    @endif

                </div>

            </div>

        </div>



        <!-- ================================================= -->
        <!-- MENU CEPAT -->
        <!-- ================================================= -->

        <div
            class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">


            <!-- PESANAN -->

            <a
                href="{{ route('properties.index') }}"
                class="bg-white rounded-3xl border border-gray-100 p-7 hover:shadow-lg transition">

                <div
                    class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">

                    <span class="text-blue-600 text-xl">
                        ≡
                    </span>

                </div>


                <h3 class="text-xl mb-2">
                    Pesanan Saya
                </h3>


                <p class="text-gray-500">
                    Lihat dan kelola pesanan penginapan kamu.
                </p>

            </a>



            <!-- EXPLORE -->

            <a
                href="{{ route('properties.index') }}"
                class="bg-white rounded-3xl border border-gray-100 p-7 hover:shadow-lg transition">

                <div
                    class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-5">

                    <span class="text-blue-600 text-xl">
                        ⌕
                    </span>

                </div>


                <h3 class="text-xl mb-2">
                    Explore Penginapan
                </h3>


                <p class="text-gray-500">
                    Cari hotel, villa, dan kost favorit kamu.
                </p>

            </a>

        </div>



        <!-- ================================================= -->
        <!-- LOGOUT -->
        <!-- ================================================= -->

        <div
            class="mt-8 bg-white rounded-3xl border border-gray-100 p-7">

            <div
                class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                <div>

                    <h3 class="text-xl mb-2">
                        Keluar dari Akun
                    </h3>


                    <p class="text-gray-500">
                        Kamu akan keluar dari akun Homestayka.
                    </p>

                </div>


                <form
                    action="{{ route('logout') }}"
                    method="POST">

                    @csrf

                    <button
                        type="submit"
                        class="px-7 py-3 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition">
                        Logout
                    </button>

                </form>

            </div>

        </div>

    </main>



    <!-- ===================================================== -->
    <!-- FOOTER -->
    <!-- ===================================================== -->

    <footer
        class="bg-gray-950 text-white mt-16">

        <div
            class="max-w-7xl mx-auto px-6 py-10">

            <div
                class="flex flex-col md:flex-row md:justify-between gap-5">

                <div>

                    <p class="text-2xl">
                        Homestayka
                    </p>


                    <p class="text-gray-500 mt-2">
                        Temukan tempat menginap yang tepat.
                    </p>

                </div>


                <p class="text-gray-600 text-sm">
                    © {{ date('Y') }} Homestayka
                </p>

            </div>

        </div>

    </footer>



    <!-- ===================================================== -->
    <!-- PROGRESS BAR SCRIPT -->
    <!-- ===================================================== -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const progressBar =
                document.getElementById('profileProgressBar');

            if (progressBar) {

                const progress =
                    progressBar.getAttribute('data-progress');

                progressBar.style.width = progress + '%';

            }

        });
    </script>


</body>

</html>