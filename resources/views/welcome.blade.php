<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Raudlatul Athfal</title>
    <link href="{{ asset('build/assets/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
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

    <!-- Header -->
    <header class="bg-green-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">MI Raudlatul Athfal</div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="/profil" class="hover:text-gray-200">Profil</a></li>
                    <li><a href="/galeri" class="hover:text-gray-200">Galeri</a></li>
                    <li><a href="#" id="contactBtn" class="hover:text-gray-200">Kontak</a></li>
                    <li><a href="/ppdb" class="hover:text-gray-200">PPDB</a></li>
                </ul>
            </nav>
            <a href="/login" class="bg-white text-green-600 py-2 px-4 rounded hover:bg-gray-200">Login</a>
        </div>
    </header>

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

    <!-- Hero Section -->
    <section id="home" class="bg-green-100 py-16 text-center bg-cover bg-center" style="background-image: url('/images/mi.jpg');">
    <div class="container mx-auto">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-white">MI RAUDLATUL ATFAL NONGKOSAWIT</h1>
            <p class="mt-4 text-white">Mengomposisikan Madrasah sebagai pusat keunggulan yang mampu mempersiapkan dan mengembangkan sumber daya insani yang berkualitas di bidang IPTEK dan Imtaq</p>
            <a href="/profil" class="mt-6 inline-block bg-green-600 text-white py-3 px-6 rounded hover:bg-green-700">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="py-16 bg-white bg-green-200">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Kami</h2>
            <p class="mt-4 text-gray-600 font-semibold">Madrasah Ibtidaiyah (MI) Raudlatul Atfal merupakan satu lembaga pendidikan formal yang berada di bawah naungan Kementerian Agama Republik Indonesia. Secara geografis MI Raudlatul Atfal Nongkosawit terletak di Kampung Randusari RT 02 RW II Kelurahan Nongkosawit Kecamatan Gunungpati Kota Semarang. Madrasah ini didirikan oleh Ranting Nahdatul Ulama (NU) Kodya Semarang dan mulai beroperasi pada 22 Agustus 1954. Pengelolaan Madrasah dilakukan oleh Yayasan Pendidikan Al Ma’arif, yang dalam rutinitasnya dilaksanakan oleh  segenap personel madrasah tersebut.</p>
        </div>
    </section>

    <!-- Program Unggulan -->
    <section id="program" class="py-16 bg-green-200">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800">Program Unggulan</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-bold text-green-600">Marching Band</h3>
                    <p class="mt-2 text-gray-600">Melayani untuk acara KARNAVAL : Khitanan, PHBI, dll.</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-bold text-green-600">Pendidikan Karakter</h3>
                    <p class="mt-2 text-gray-600">Membentuk generasi berakhlak mulia.</p>
                </div>
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-bold text-green-600">Teknologi Terpadu</h3>
                    <p class="mt-2 text-gray-600">Mengenalkan teknologi sejak dini.</p>
                </div>
            </div>
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
