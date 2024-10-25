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
            <h2 class="text-4xl font-extrabold text-gray-900">Register</h2>
            <p class="mt-2 text-sm text-gray-600">Buat Akun Untuk PPDB</p>
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

        <form class="mt-8 space-y-6" action="{{ route('custom.register') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" autocomplete="name"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="email" name="email" id="email" autocomplete="email"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <!-- Tombol Register dengan warna lime-500 -->
            <button type="submit"
                class="w-full px-6 py-3 mt-6 text-lg font-semibold text-white bg-lime-500 rounded-lg hover:bg-lime-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                Register
            </button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Sudah Punya Akun? KONFIRMASI ALAMAT EMAIL KALIAN
                <a href="/custom-login" class="font-medium text-blue-600 hover:underline">Login here</a>
            </p>
        </div>
    </div>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 MI BADRISSALAM. All rights reserved.</p>
    </footer>
</body>
</html>
