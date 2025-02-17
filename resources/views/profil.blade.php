<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - MI Raudlatul Athfal</title>
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
    <!-- Profil Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800">Profil Madrasah</h2>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <img src="/images/profil1.jpg" alt="Guru 1" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold text-center mt-4 text-gray-800">Guru MI Raudlatul Athfal</h3>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="/images/profil2.jpg" alt="Guru 2" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold text-center mt-4 text-gray-800">Murid MI Raudlatul Athfal</h3>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="/images/profil3.jpg" alt="Guru 3" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold text-center mt-4 text-gray-800">Tim Paskibra MI Raudlatul Athfal</h3>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <img src="/images/profil4.png" alt="Guru 4" class="w-full h-48 object-cover rounded">
                    <h3 class="text-lg font-bold text-center mt-4 text-gray-800">Guru MI Raudlatul Athfal</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Singkat -->
    <section id="about" class="py-10 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Sejarah Singkat</h2>
            <div class="mt-8 max-w-4xl mx-auto text-gray-600 leading-relaxed">
                <p class="mb-6 text-justify">
                    MI Raudlatul Athfal merupakan lembaga pendidikan formal di bawah naungan Kementerian Agama Republik Indonesia. Berlokasi di Kampung Randusari RT 02 RW II Kelurahan Nongkosawit, Kecamatan Gunungpati, Kota Semarang.
                </p>
                <p class="mb-6 text-justify">
                    Didirikan pada 22 Agustus 1954 oleh Ranting Nahdatul Ulama (NU) Kodya Semarang, MI Raudlatul Athfal bertujuan untuk memberikan pendidikan berbasis agama dan teknologi kepada generasi muda. Saat ini, pengelolaan Madrasah dilakukan oleh Yayasan Pendidikan Al Ma’arif.
                </p>
                <p class="mb-6 text-justify">
                    Visi Madrasah adalah mencetak generasi unggul yang tidak hanya menguasai ilmu pengetahuan dan teknologi, tetapi juga memiliki akhlak mulia sesuai dengan nilai-nilai Islam.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi, Misi, dan Tujuan -->
    <section id="visi-misi" class="py-10 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 text-center">Visi, Misi & Tujuan</h2>
            
            <!-- Visi -->
            <div class="mt-8 max-w-4xl mx-auto text-gray-600 leading-relaxed">
                <h3 class="text-2xl font-semibold text-green-600 mb-4">Visi</h3>
                <p class="text-justify">
                    “Mengomposisikan Madrasah sebagai pusat keunggulan yang mampu mempersiapkan dan mengembangkan sumber daya insani yang berkualitas di bidang IPTEK dan Imtaq.”
                </p>
            </div>

            <!-- Misi -->
            <div class="mt-8 max-w-4xl mx-auto text-gray-600 leading-relaxed">
                <h3 class="text-2xl font-semibold text-green-600 mb-4">Misi</h3>
                <p class="text-justify">
                    “Menyelenggarakan pendidikan yang berorientasi mutu baik secara keilmuan maupun secara moral dan sosial sehingga mampu menyiapkan dan mengembangkan sumber daya insani yang mempunyai kualitas di bidang IPTEK dan IMTAQ.”
                </p>
            </div>

            <!-- Tujuan -->
            <div class="mt-8 max-w-4xl mx-auto text-gray-600 leading-relaxed">
                <h3 class="text-2xl font-semibold text-green-600 mb-4">Tujuan</h3>
                <ul class="list-disc pl-6">
                    <li class="mb-2">Memberikan bekal kemampuan dasar “Baca Tulis Hitung”.</li>
                    <li class="mb-2">Memberikan pengetahuan dan keterampilan dasar yang bermanfaat bagi siswa.</li>
                    <li class="mb-2">Memberikan bekal kemampuan dasar tentang pengetahuan Agama Islam dan pengamalannya sesuai tingkat pengembangan, serta mempersiapkan mereka untuk mengikuti pendidikan di jenjang selanjutnya.</li>
                    <li class="mb-2">Mencerdaskan kehidupan bangsa.</li>
                </ul>
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
