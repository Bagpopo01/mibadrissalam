<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>

        @livewireStyles
        @vite('resources/css/app.css') <!-- Pastikan Tailwind dikompilasi di sini -->
    </head>
    @if (session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

    <body class="bg-gray-100 antialiased">
        <div class="container mx-auto p-4">
            {{ $slot }}
        </div>

        @livewireScripts
        @vite('resources/js/app.js') <!-- Jika ada script tambahan -->
    </body>
</html>
