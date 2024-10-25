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
    <!-- Main Content (posisikan di tengah layar) -->
    <main class="flex-grow flex items-center justify-center">
    <div class="w-full max-w-md p-8 space-y-8 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <h2 class="text-4xl font-extrabold text-gray-900">Login</h2>
            <p class="mt-2 text-sm text-gray-600">Silahkan LOGIN Peserta PPDB</p>
        </div>

        @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('custom.login') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="relative mt-1">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <span class="absolute inset-y-0 right-4 flex items-center text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.94 6.94A7 7 0 1117.06 6.94 4.5 4.5 0 0010 11a4.5 4.5 0 00-7.06-4.06z" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" autocomplete="current-password"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox"
                        class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="remember_me" class="block ml-2 text-sm text-gray-900">Remember me</label>
                </div>
            </div>

            <!-- Tombol Login dengan warna lime-500 -->
            <button type="submit"
                class="w-full px-6 py-3 mt-6 text-lg font-semibold text-white bg-lime-500 rounded-lg hover:bg-lime-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                Login
            </button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Tidak Punya Akun?
                <a href="/custom-register" class="font-medium text-blue-600 hover:underline">Daftar Disini</a>
            </p>
        </div>
    </div>
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 MI BADRISSALAM. All rights reserved.</p>
    </footer>
</body>
</html>
