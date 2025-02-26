<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa - MI Raudlatul Athfal</title>
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
         body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Mencegah horizontal scroll */
        }
        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.7); /* Black w/ opacity */
            backdrop-filter: blur(5px); /* Blur effect */
        }

        .modal-content {
            background-color: #ffffff; /* White background */
            margin: 10% auto; /* 10% from the top and centered */
            padding: 20px;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow */
            width: 80%; /* Could be more or less, depending on screen size */
            animation: fadeIn 0.4s; /* Animation */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Animation for modal */
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        /* Title Styles */
        .modal-title {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50; /* Darker color */
            margin-bottom: 15px; /* Spacing below title */
        }

        /* Message Styles */
        .modal-message {
            font-size: 16px;
            color: #34495e; /* Darker grey color */
        }

        /* Button Styles */
        .modal-message a {
            color: #27ae60; /* Green link */
            text-decoration: underline;
        }

        .modal-message a:hover {
            text-decoration: none; /* Remove underline on hover */
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar dari Component -->
    <x-navbar />

    <!-- Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-title">Kontak Kami</div>
            <div class="modal-message">
                Silahkan hubungi 
                <a href="mailto:miraudlatulatfalnongkosawit@gmail.com">miraudlatulatfalnongkosawit@gmail.com</a> 
                untuk berkomunikasi secara lebih intens.
            </div>
        </div>
    </div>


    <!-- Formulir Pendaftaran -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800">Pendaftaran Siswa Baru</h2>
            <form action="{{ route('students.store') }}" method="POST" class="mt-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-gray-700">Nama Anak</label>
                        <input type="text" name="name" id="name" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="nik" class="block text-gray-700">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" name="nik" id="nik" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="gender" class="block text-gray-700">Jenis Kelamin</label>
                        <select name="gender" id="gender" required class="mt-2 p-2 w-full border rounded">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="place_of_birth" class="block text-gray-700">Tempat Lahir</label>
                        <input type="text" name="place_of_birth" id="place_of_birth" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="religion" class="block text-gray-700">Agama</label>
                        <input type="text" name="religion" id="religion" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="address" class="block text-gray-700">Alamat</label>
                        <textarea name="address" id="address" required class="mt-2 p-2 w-full border rounded"></textarea>
                    </div>
                    <div>
                        <label for="child_number" class="block text-gray-700">Anak Nomor</label>
                        <input type="number" name="child_number" id="child_number" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="siblings_count" class="block text-gray-700">Jumlah Saudara</label>
                        <input type="number" name="siblings_count" id="siblings_count" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="weight" class="block text-gray-700">Berat Badan (kg)</label>
                        <input type="number" name="weight" id="weight" step="0.1" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="height" class="block text-gray-700">Tinggi Badan (cm)</label>
                        <input type="number" name="height" id="height" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="disability" class="block text-gray-700">Cacat Tubuh</label>
                        <input type="text" name="disability" id="disability" class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="illness_history" class="block text-gray-700">Penyakit yang pernah diderita</label>
                        <input type="text" name="illness_history" id="illness_history" class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="illness_duration" class="block text-gray-700">Lama menderita Penyakit (bulan)</label>
                        <input type="number" name="illness_duration" id="illness_duration" class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="father_name" class="block text-gray-700">Nama Ayah</label>
                        <input type="text" name="father_name" id="father_name" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="father_job" class="block text-gray-700">Pekerjaan Ayah</label>
                        <input type="text" name="father_job" id="father_job" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="mother_name" class="block text-gray-700">Nama Ibu</label>
                        <input type="text" name="mother_name" id="mother_name" required class="mt-2 p-2 w-full border rounded">
                    </div>
                    <div>
                        <label for="mother_job" class="block text-gray-700">Pekerjaan Ibu</label>
                        <input type="text" name="mother_job" id="mother_job" required class="mt-2 p-2 w-full border rounded">
                    </div>
                </div>
                <button type="submit" class="mt-6 bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700">Daftar</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-8">
        <div class="container mx-auto text-center">
            <p>© 2025 MI Raudlatul Athfal - Semua Hak Dilindungi</p>
        </div>
    </footer>

    <script>
        // Get the modal
        var modal = document.getElementById("contactModal");

        // Get the button that opens the modal
        var btn = document.getElementById("contactBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
