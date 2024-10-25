<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI BADRISSALAM</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"> <!-- Favicon -->
    <!-- Menggunakan Vite untuk memuat CSS dan JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    
</head>
<body class="bg-gray-100">
<header class="bg-lime-500 text-white">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <!-- Logo -->
        <a href="{{ route('landing') }}" class="flex items-center space-x-2">
            <img src="{{ asset('images/favicon.png') }}" alt="Logo Sekolah" class="h-10 w-10">
            <span class="text-xl font-bold">MI BADRISSALAM</span>
        </a>

        <!-- Menu (Desktop) -->
        <nav class="hidden md:flex space-x-4 font-bold">
            <a href="{{ route('landing') }}" class="hover:text-gray-200">Home</a>
            <div class="relative group">
                <button class="hover:text-gray-200 focus:outline-none" id="profile-button">Profile</button>
                <div class="dropdown-menu absolute hidden bg-white text-black rounded shadow-lg mt-2 w-48" id="profile-menu">
                    <a href="{{ route('profile.profil') }}" class="block px-4 py-2 hover:bg-gray-200">Profile Kepala Sekolah</a>
                    <a href="{{ route('profile.sejarah') }}" class="block px-4 py-2 hover:bg-gray-200">Sejarah Sekolah</a>
                    <a href="{{ route('profile.struktur') }}" class="block px-4 py-2 hover:bg-gray-200">Struktur Sekolah</a>
                </div>
            </div>
            <div class="relative group">
                <button class="hover:text-gray-200 focus:outline-none" id="eperpus-button">E-Perpus</button>
                <div class="dropdown-menu absolute hidden bg-white text-black rounded shadow-lg mt-2 w-48" id="eperpus-menu">
                    <a href="{{ route('book.bacaan') }}" class="block px-4 py-2 hover:bg-gray-200">Buku Bacaan</a>
                    <a href="{{ route('book.materi_pelajaran') }}" class="block px-4 py-2 hover:bg-gray-200">Buku Pelajaran</a>
                </div>
            </div>
            <a href="{{ route('berita.index') }}" class="hover:text-gray-200">Berita</a>
            <a href="{{ route('galeri.index') }}" class="hover:text-gray-200">Galeri</a>
            <a href="{{ route('pages.ppdb') }}" class="hover:text-gray-200">PPDB</a>
        </nav>

        <!-- Login Button (Desktop) -->
        <div class="hidden md:block">
            <a href="{{ route('duallogin.duallogin') }}" class="bg-white text-lime-500 px-4 py-2 rounded hover:bg-gray-100 font-bold">Login</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden flex items-center" id="mobile-menu-button">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <nav class="md:hidden bg-white text-black shadow-lg hidden" id="mobile-menu">
        <a href="{{ route('landing') }}" class="block px-4 py-2 hover:bg-gray-200 font-semibold">Home</a>
        <button class="block w-full text-left px-4 py-2 hover:bg-gray-200 font-semibold" id="mobile-profile-button">Profile</button>
        <div class="hidden px-4 py-2" id="mobile-profile-menu">
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile Kepala Sekolah</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Sejarah Sekolah</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Struktur Sekolah</a>
        </div>
        <button class="block w-full text-left px-4 py-2 hover:bg-gray-200 font-semibold" id="mobile-eperpus-button">E-Perpus</button>
        <div class="hidden px-4 py-2" id="mobile-eperpus-menu">
            <a href="{{ route('book.bacaan') }}" class="block px-4 py-2 hover:bg-gray-200">Buku Bacaan</a>
            <a href="{{ route('book.materi_pelajaran') }}" class="block px-4 py-2 hover:bg-gray-200">Buku Pelajaran</a>
        </div>
        <a href="{{ route('berita.index') }}" class="block px-4 py-2 hover:bg-gray-200 font-semibold">Berita</a>
        <a href="{{ route('galeri.index') }}" class="block px-4 py-2 hover:bg-gray-200 font-semibold">Galeri</a>
        <a href="{{ route('pages.ppdb') }}" class="block px-4 py-2 hover:bg-gray-200 font-semibold">PPDB</a>
        <a href="admin/login" class="block px-4 py-2 text-lime-500 font-bold">Login</a>
    </nav>
</header>

 <!-- Main Content -->
 <main class="min-h-screen">
        @yield('content')
    </main>
    <footer class="bg-lime-500 text-white py-10 mt-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Bagian Informasi Sekolah -->
            <div>
                <h3 class="text-xl font-semibold mb-4">MI BADRISSALAM</h3>
                <p class="text-white">
                    Sekolah Kita adalah lembaga pendidikan yang berkomitmen untuk menyediakan pendidikan berkualitas dan lingkungan belajar yang inspiratif bagi siswa.
                </p>
                
            </div>

            <!-- Navigasi Cepat -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Navigasi Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('landing') }}" class="text-white hover:text-white">Home</a></li>
                 
                    <li><a href="{{ route('pages.ppdb') }}" class="text-white hover:text-white">PPDB</a></li>
                    <li><a href="{{ route('berita.index') }}" class="text-white hover:text-white">Berita</a></li>
                    <li><a href="{{ route('galeri.index') }}" class="text-white hover:text-white">Galeri</a></li>

                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Kontak</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <span>Tugurejo 003/003, Sukorejo, Musuk, Boyolali</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-3"></i>
                        <span>085231667776</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-3"></i>
                        <span>info@mibadrissalam.sch.id</span>
                    </li>
                </ul>
            </div>

            <!-- Sosial Media -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="https://youtube.com/@mibadrissalamsukorejo?si=FKiYHMR-lFOuFJyH" class="text-white hover:text-white">
                        <i class="fab fa-youtube text-2xl"></i>
                    </a>
                   
                    <a href="https://www.instagram.com/mi_badrissalam?igsh=MWlhOWJjN2NkbnZpMg%3D%3D&utm_source=qr" class="text-white hover:text-white">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@mi.badrissalam?_t=8qc8E5JXT29&_r=1" class="text-white hover:text-white">
                        <i class="fab fa-tiktok text-2xl"></i>
                    </a>
                </div>
                <p class="text-white mt-4">Stay connected with our social media channels for the latest updates.</p>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-10 border-t border-gray-700 pt-6 flex justify-between flex-col md:flex-row text-center md:text-left">
            <p class="text-white">&copy; 2024 WMBSpopo. All rights reserved.</p>
            <ul class="flex space-x-4 mt-4 md:mt-0 justify-center">
                <li><a href="#" class="text-white hover:text-white">Privacy Policy</a></li>
                <li><a href="#" class="text-white hover:text-white">Terms & Conditions</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
