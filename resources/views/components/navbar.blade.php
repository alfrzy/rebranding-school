<header class="bg-green-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold">MI Raudlatul Athfal</div>

        <!-- Wrapper untuk navbar dan dropdown fitur -->
        <div class="flex items-center space-x-4">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-gray-200">Beranda</a></li>
                    <li><a href="/profil" class="hover:text-gray-200">Profil</a></li>
                    <li><a href="/galeri" class="hover:text-gray-200">Galeri</a></li>
                    <li><a href="#" id="contactBtn" class="hover:text-gray-200">Kontak</a></li>
                </ul>
            </nav>

            <!-- Dropdown Fitur (Klik untuk Toggle) -->
            <div class="relative">
                <button id="dropdownButton" class="flex items-center text-white hover:text-gray-200 focus:outline-none">
                    Fitur <span class="ml-1">&#9662;</span> <!-- Panah ke bawah -->
                </button>
                <div id="dropdownMenu" class="absolute left-0 mt-2 w-40 bg-white rounded shadow-md opacity-0 invisible transition-opacity duration-200">
                    <a href="/login" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
                    <a href="/ppdb" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    // Toggle dropdown saat tombol diklik
    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('opacity-100');
        dropdownMenu.classList.toggle('visible');
        dropdownMenu.classList.toggle('opacity-0');
        dropdownMenu.classList.toggle('invisible');
    });

    // Menutup dropdown jika klik di luar area dropdown
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('opacity-0', 'invisible');
            dropdownMenu.classList.remove('opacity-100', 'visible');
        }
    });
</script>
