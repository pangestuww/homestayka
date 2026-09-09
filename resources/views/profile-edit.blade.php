<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Edit Profile - Homestayka</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>


<body class="bg-gray-50 text-gray-900">


    <!-- ===================================================== -->
    <!-- NAVBAR -->
    <!-- ===================================================== -->

    <nav
        class="bg-white
           border-b
           border-gray-100">

        <div
            class="max-w-7xl
               mx-auto
               px-6 lg:px-10">

            <div
                class="h-20
                   flex
                   items-center
                   justify-between">


                <!-- LOGO -->

                <a
                    href="{{ route('home') }}"
                    class="flex
                       items-center
                       gap-3">

                    <div
                        class="w-10 h-10
                           rounded-xl
                           overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=200&q=80"
                            alt="Homestayka"
                            class="w-full h-full object-cover">

                    </div>


                    <span class="text-2xl">
                        Homestayka
                    </span>

                </a>



                <!-- BACK PROFILE -->

                <a
                    href="{{ route('profile') }}"
                    class="text-gray-600
                       hover:text-blue-600">
                    ← Kembali ke Profile
                </a>

            </div>

        </div>

    </nav>



    <!-- ===================================================== -->
    <!-- MAIN -->
    <!-- ===================================================== -->

    <main
        class="max-w-4xl
           mx-auto
           px-6
           py-12">


        <!-- TITLE -->

        <div class="mb-8">

            <p
                class="text-blue-600
                   text-sm
                   mb-3">
                PENGATURAN AKUN
            </p>


            <h1 class="text-4xl mb-3">
                Edit Profil
            </h1>


            <p class="text-gray-500">
                Lengkapi informasi pribadi kamu.
            </p>

        </div>



        <!-- ================================================= -->
        <!-- ERROR -->
        <!-- ================================================= -->

        @if($errors->any())

        <div
            class="mb-8
                   bg-red-50
                   border border-red-200
                   rounded-2xl
                   p-5">

            <p
                class="text-red-700
                       mb-3">
                Ada data yang perlu diperbaiki:
            </p>


            <ul
                class="text-sm
                       text-red-600
                       space-y-1">

                @foreach($errors->all() as $error)

                <li>
                    • {{ $error }}
                </li>

                @endforeach

            </ul>

        </div>

        @endif



        <!-- ================================================= -->
        <!-- FORM -->
        <!-- ================================================= -->

        <form
            action="{{ route('profile.update') }}"
            method="POST"
            class="bg-white
               rounded-3xl
               border border-gray-100
               shadow-sm
               p-8">

            @csrf

            @method('PUT')



            <!-- ================================================= -->
            <!-- AKUN -->
            <!-- ================================================= -->

            <div class="mb-10">

                <h2 class="text-2xl mb-2">
                    Informasi Akun
                </h2>


                <p class="text-gray-500">
                    Informasi dasar akun Homestayka kamu.
                </p>

            </div>



            <!-- NAME -->

            <div class="mb-6">

                <label
                    for="name"
                    class="block
                       text-sm
                       mb-2">
                    Nama Lengkap
                </label>


                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $user->name) }}"
                    placeholder="Masukkan nama lengkap"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100"
                    required>

            </div>



            <!-- EMAIL -->

            <div class="mb-10">

                <label
                    for="email"
                    class="block
                       text-sm
                       mb-2">
                    Email
                </label>


                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email', $user->email) }}"
                    placeholder="Masukkan email"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100"
                    required>

            </div>



            <!-- ================================================= -->
            <!-- DATA DIRI -->
            <!-- ================================================= -->

            <div class="mb-10">

                <h2 class="text-2xl mb-2">
                    Data Diri
                </h2>


                <p class="text-gray-500">
                    Lengkapi data diri agar profil kamu lebih lengkap.
                </p>

            </div>



            <!-- PHONE -->

            <div class="mb-6">

                <label
                    for="phone"
                    class="block
                       text-sm
                       mb-2">
                    Nomor HP
                </label>


                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="{{ old('phone', $user->phone) }}"
                    placeholder="Contoh: 081234567890"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100">

            </div>



            <!-- GENDER -->

            <div class="mb-6">

                <label
                    for="gender"
                    class="block
                       text-sm
                       mb-2">
                    Jenis Kelamin
                </label>


                <select
                    id="gender"
                    name="gender"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100">

                    <option value="">
                        Pilih jenis kelamin
                    </option>


                    <option
                        value="Laki-laki"
                        {{ old('gender', $user->gender) == 'Laki-laki' ? 'selected' : '' }}>
                        Laki-laki
                    </option>


                    <option
                        value="Perempuan"
                        {{ old('gender', $user->gender) == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>

            </div>



            <!-- BIRTH DATE -->

            <div class="mb-6">

                <label
                    for="birth_date"
                    class="block
                       text-sm
                       mb-2">
                    Tanggal Lahir
                </label>


                <input
                    type="date"
                    id="birth_date"
                    name="birth_date"
                    value="{{ old('birth_date', $user->birth_date ? $user->birth_date->format('Y-m-d') : '') }}"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100">

            </div>



            <!-- ADDRESS -->

            <div class="mb-10">

                <label
                    for="address"
                    class="block
                       text-sm
                       mb-2">
                    Alamat
                </label>


                <textarea
                    id="address"
                    name="address"
                    rows="4"
                    placeholder="Masukkan alamat lengkap"
                    class="w-full
                       px-5 py-4
                       rounded-xl
                       border border-gray-200
                       outline-none
                       resize-none
                       focus:border-blue-500
                       focus:ring-2
                       focus:ring-blue-100">{{ old('address', $user->address) }}</textarea>

            </div>



            <!-- ================================================= -->
            <!-- BUTTON -->
            <!-- ================================================= -->

            <div
                class="flex
                   flex-col-reverse
                   sm:flex-row
                   justify-end
                   gap-3
                   border-t
                   border-gray-100
                   pt-7">

                <a
                    href="{{ route('profile') }}"
                    class="px-7 py-3
                       rounded-xl
                       border border-gray-200
                       text-gray-600
                       text-center
                       hover:bg-gray-50
                       transition">
                    Batal
                </a>


                <button
                    type="submit"
                    class="px-7 py-3
                       rounded-xl
                       bg-blue-600
                       text-white
                       hover:bg-blue-700
                       transition">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </main>



    <!-- ===================================================== -->
    <!-- FOOTER -->
    <!-- ===================================================== -->

    <footer
        class="bg-gray-950
           text-white
           mt-16">

        <div
            class="max-w-7xl
               mx-auto
               px-6
               py-10">

            <div
                class="flex
                   flex-col
                   md:flex-row
                   md:justify-between
                   gap-5">

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


</body>

</html>