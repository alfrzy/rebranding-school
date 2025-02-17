<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - MI Raudlatul Athfal</title>
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
            <div class="text-2xl font-bold ">MI Raudlatul Athfal</div>
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

    <!-- Tabel Daftar Siswa -->
    <main class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-start text-gray-800 ">Daftar Siswa</h2>
            <table class="mt-8 w-full border border-gray-300">
                <thead>
                    <tr class="bg-green-600 text-white">
                        <th class="py-2">Nama</th>
                        <th class="py-2">NIK</th>
                        <th class="py-2">Jenis Kelamin</th>
                        <th class="py-2">Tempat Lahir</th>
                        <th class="py-2">Tanggal Lahir</th>
                        <th class="py-2">Agama</th>
                        <th class="py-2">Alamat</th>
                        <th class="py-2">Anak Nomor</th>
                        <th class="py-2">Jumlah Saudara</th>
                        <th class="py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="border px-4 py-2">{{ $student->name }}</td>
                            <td class="border px-4 py-2">{{ $student->nik }}</td>
                            <td class="border px-4 py-2">{{ $student->gender === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td class="border px-4 py-2">{{ $student->place_of_birth }}</td>
                            <td class="border px-4 py-2">{{ $student->date_of_birth }}</td>
                            <td class="border px-4 py-2">{{ $student->religion }}</td>
                            <td class="border px-4 py-2">{{ $student->address }}</td>
                            <td class="border px-4 py-2">{{ $student->child_number }}</td>
                            <td class="border px-4 py-2">{{ $student->siblings_count }}</td>
                            <td class="border px-4 py-2">
                                <a href="#" class="text-green-600 hover:underline">Detail</a>
                                <!-- Tambahkan tombol edit atau hapus jika diperlukan -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
