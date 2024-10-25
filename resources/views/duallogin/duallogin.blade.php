@extends('layoutssss.app')

@section('title', 'Profil Kepala Sekolah')

@section('content')

    <div class="bg-white w-full max-w-7xl mx-auto shadow-lg rounded-lg overflow-hidden flex items-center justify-center my-32">
        <!-- Konten di sebelah kiri -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <!-- Logo di atas kontainer -->
            <div class="mb-6 text-center">
                <img src="{{ asset('images/favicon.png') }}" alt="Logo" class="w-20 h-20 mx-auto">
            </div>
            
            <h2 class="text-2xl font-bold mb-4 text-center">Pilih Login Anda</h2>
            
            <div class="flex flex-col space-y-4">
                <a href="/custom-login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded text-center">
                    Login PPDB
                </a>
                <a href="/custom-register" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded text-center">
                    Register PPDB
                </a>
                <a href="admin/login" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded text-center">
                    Login Sekolah
                </a>
            </div>
        </div>
        
        <!-- Gambar di sebelah kanan -->
        <div class="w-1/2 flex items-center justify-center">
            <img src="{{ asset('images/image2.jpeg') }}" alt="Gambar" class="w-full h-full object-cover">
        </div>
    </div>

@endsection