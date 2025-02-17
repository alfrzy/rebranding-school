<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - MI Raudlatul Athfal</title>
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

    <!-- Galeri Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Galeri</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-200 p-4 rounded">
                    <img src="/images/mb.png" alt="Gambar 1" class="w-full h-auto rounded">
                </div>
                <div class="bg-gray-200 p-4 rounded">
                    <img src="/images/lombi.jpg" alt="Gambar 2" class="w-full h-auto rounded">
                </div>
                <div class="bg-gray-200 p-4 rounded">
                    <img src="/images/kkn.png" alt="Gambar 3" class="w-full h-auto rounded">
                </div>
                <!-- Tambahkan lebih banyak gambar sesuai kebutuhan -->
            </div>
        </div>
    </section>

    <!-- Maps Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800">Lokasi Kami</h2>
        <div class="mt-8 flex justify-center">
            <iframe 
                src="https://www.google.com/maps/d/embed?mid=1Hi_uPZpOjI32lrzq0KyMf19BoMI" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
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
