<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo-mi.png') }}" alt="Logo MI" class="w-20">
        </div>

        <!-- Judul -->
        <h2 class="text-2xl font-bold text-green-700 text-center">Login ke Portal MI</h2>
        <p class="text-gray-600 text-center text-sm mb-4">Silakan masukkan email dan password</p>

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-green-700 font-semibold">Email</label>
                <input id="email" type="email" name="email" required
                    class="block w-full mt-1 p-2 border border-green-400 rounded-md focus:ring focus:ring-green-200 focus:border-green-600">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-green-700 font-semibold">Password</label>
                <input id="password" type="password" name="password" required
                    class="block w-full mt-1 p-2 border border-green-400 rounded-md focus:ring focus:ring-green-200 focus:border-green-600">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="flex items-center text-green-700">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500">
                    <span class="ms-2 text-sm">Ingat Saya</span>
                </label>

                <a href="{{ route('password.request') }}" class="text-sm text-green-600 hover:text-green-800">
                    Lupa Password?
                </a>
            </div>

            <!-- Tombol Login -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-green-600 hover:bg-green-700 transition-all duration-300 text-white px-6 py-2 rounded-lg shadow-md">
                    Log in
                </button>
            </div>
        </form>

        <!-- Link Registrasi -->
        <p class="text-center text-sm text-gray-600 mt-4">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-green-600 hover:text-green-800 font-semibold">Daftar di sini</a>
        </p>
    </div>

</body>
</html>
