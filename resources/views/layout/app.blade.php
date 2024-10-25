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
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <header class="bg-gradient-to-r from-blue-600 to-purple-600 shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        @if(Auth::guard('custom')->check())
                        <p class="text-white">Selamat Datang Di Dashboard PPDB MI BADRISSALAM, {{ Auth::guard('custom')->user()->name }}!</p>
                    @else
                        <p class="text-white">Selamat Datang di Dashboard PPDB MI BADRISSALAM!</p>
                    @endif
            <nav class="flex items-center space-x-6">
                <a href="{{ route('custom.dashboard') }}" class="text-lg font-bold text-white hover:text-gray-200">Dashboard</a>
                <a href="{{ route('pendaftaran.create') }}" class="hover:text-gray-200 text-white">Tambah Peserta Didik Baru</a>
                <a href="#" class="hover:text-gray-200 text-white">Pengumuman</a>
                <a href="{{ route('pendaftaran.index') }}" class="hover:text-gray-200 text-white">Lihat Peserta Didik</a>
                @if(Auth::guard('custom')->check())
                    <form id="logout-form" action="{{ route('custom.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-white hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300 ease-in-out">Logout</a>
                @endif
            </nav>
        </div>
    </header>

    <!-- Main Content (posisikan di tengah layar) -->
    <main class="flex-grow flex items-center justify-center">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 MI BADRISSALAM. All rights reserved.</p>
    </footer>
</body>
</html>
