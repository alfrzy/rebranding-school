<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MI Raudlatul Athfal</title>
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-green-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">Dashboard</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/dashboard" class="hover:text-gray-200">Dashboard</a></li>
                    <li><a href="/students" class="hover:text-gray-200">Daftar Siswa</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-500 px-4 py-2 rounded text-white hover:bg-red-700">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Dashboard Content -->
    <main class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Selamat Datang di Dashboard</h2>
            <p class="mt-4 text-gray-600">Kelola data siswa dan informasi lainnya di sini.</p>

            <!-- Widget Statistik -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Total Siswa</h3>
                    <p class="text-3xl font-bold">{{ $totalStudents }}</p>
                </div>

                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Siswa Laki-laki</h3>
                    <p class="text-3xl font-bold">{{ \App\Models\Student::where('gender', 'L')->count() }}</p>
                </div>

                <div class="bg-pink-500 text-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold">Siswa Perempuan</h3>
                    <p class="text-3xl font-bold">{{ \App\Models\Student::where('gender', 'P')->count() }}</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-8">
        <div class="container mx-auto text-center">
            <p>© 2025 MI Raudlatul Athfal - Semua Hak Dilindungi</p>
        </div>
    </footer>

</body>
</html>
