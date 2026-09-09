<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Daftar - Homestayka</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="min-h-screen bg-gray-100">


    <div class="min-h-screen flex">


        <!-- ========================================= -->
        <!-- IMAGE -->
        <!-- ========================================= -->

        <div class="hidden lg:flex lg:w-1/2 relative">

            <img
                src="https://images.unsplash.com/photo-1601918774946-25832a4be0d6?auto=format&fit=crop&w=1600&q=90"
                class="absolute inset-0 w-full h-full object-cover"
                alt="Villa">

            <div class="absolute inset-0 bg-black/45"></div>


            <div
                class="relative z-10 text-white p-16 flex flex-col justify-between w-full">

                <a
                    href="{{ route('home') }}"
                    class="text-3xl">
                    Homestayka
                </a>


                <div>

                    <p class="uppercase tracking-widest text-sm mb-5">
                        Join Homestayka
                    </p>


                    <h1 class="text-5xl leading-tight mb-6">

                        Mulai perjalanan
                        <br>

                        dari tempat
                        <br>

                        yang tepat.

                    </h1>


                    <p class="text-white/80 text-lg max-w-md">

                        Buat akun dan temukan
                        tempat menginap terbaik.

                    </p>

                </div>


                <p class="text-sm text-white/70">

                    © {{ date('Y') }} Homestayka

                </p>

            </div>

        </div>



        <!-- ========================================= -->
        <!-- REGISTER FORM -->
        <!-- ========================================= -->

        <div
            class="w-full lg:w-1/2 flex items-center justify-center p-8">

            <div class="w-full max-w-md">


                <!-- MOBILE LOGO -->

                <div class="lg:hidden mb-10">

                    <a
                        href="{{ route('home') }}"
                        class="text-3xl">
                        Homestayka
                    </a>

                </div>



                <!-- TITLE -->

                <div class="mb-8">

                    <h2 class="text-4xl mb-3">
                        Buat akun
                    </h2>

                    <p class="text-gray-500">
                        Daftar untuk mulai menggunakan Homestayka.
                    </p>

                </div>



                <!-- ERROR -->

                @if($errors->any())

                <div
                    class="mb-5 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700">

                    @foreach($errors->all() as $error)

                    <p>
                        {{ $error }}
                    </p>

                    @endforeach

                </div>

                @endif



                <!-- FORM -->

                <form
                    action="{{ route('register.process') }}"
                    method="POST"
                    class="space-y-5">

                    @csrf


                    <!-- NAME -->

                    <div>

                        <label class="block text-sm mb-2">
                            Nama
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama"
                            required
                            autocomplete="name"
                            class="w-full px-5 py-4 rounded-xl border border-gray-200 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>



                    <!-- EMAIL -->

                    <div>

                        <label class="block text-sm mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email"
                            required
                            autocomplete="email"
                            class="w-full px-5 py-4 rounded-xl border border-gray-200 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>



                    <!-- PASSWORD -->

                    <div>

                        <label class="block text-sm mb-2">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Minimal 8 karakter"
                            required
                            autocomplete="new-password"
                            class="w-full px-5 py-4 rounded-xl border border-gray-200 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>



                    <!-- CONFIRM PASSWORD -->

                    <div>

                        <label class="block text-sm mb-2">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            required
                            autocomplete="new-password"
                            class="w-full px-5 py-4 rounded-xl border border-gray-200 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100">

                    </div>



                    <!-- BUTTON -->

                    <button
                        type="submit"
                        class="w-full py-4 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition">

                        Buat Akun

                    </button>

                </form>



                <!-- LOGIN -->

                <div class="text-center mt-8">

                    <p class="text-gray-500">

                        Sudah punya akun?

                        <a
                            href="{{ route('login') }}"
                            class="text-blue-600 hover:text-blue-700">
                            Login
                        </a>

                    </p>

                </div>



                <!-- HOME -->

                <div class="text-center mt-6">

                    <a
                        href="{{ route('home') }}"
                        class="text-sm text-gray-400 hover:text-gray-600">

                        ← Kembali ke Home

                    </a>

                </div>

            </div>

        </div>

    </div>


</body>

</html>