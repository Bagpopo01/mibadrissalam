@extends('layoutssss.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center text-green-600">Daftar Akun</h2>
        
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" required
                        class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                        placeholder="Masukkan nama lengkap">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                        placeholder="Masukkan email">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                        placeholder="Masukkan password">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-green-400 focus:border-green-500"
                        placeholder="Konfirmasi password">
                </div>
            </div>

            <button type="submit"
                class="w-full py-2 mt-4 text-white bg-green-600 hover:bg-green-700 rounded-md transition duration-200">
                Daftar
            </button>

            <p class="mt-4 text-sm text-center text-gray-600">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-green-600 hover:text-green-500">Login di sini</a>
            </p>
        </form>
    </div>
</div>
@endsection
