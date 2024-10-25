@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
   

 <!-- Main Content -->
 <main class="container mx-auto px-6 py-12 flex-grow">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Tambah Peserta Didik Baru -->
            <a href="{{ route('pendaftaran.create') }}" class="block bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <div class="text-center">
                    <i class="fas fa-user-plus text-blue-600 text-4xl mb-4"></i>
                    <h2 class="text-xl font-bold mb-2">Tambah Peserta Didik Baru</h2>
                    <p>Daftarkan peserta didik baru ke dalam sistem dengan mudah.</p>
                </div>
            </a>

            <!-- Pengumuman -->
            <a href="" class="block bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <div class="text-center">
                    <i class="fas fa-bullhorn text-green-600 text-4xl mb-4"></i>
                    <h2 class="text-xl font-bold mb-2">Pengumuman</h2>
                    <p>Lihat pengumuman terbaru terkait PPDB dan kegiatan sekolah.</p>
                </div>
            </a>

            <!-- Lihat Peserta Didik -->
            <a href="{{ route('peserta-didik.index') }}" class="block bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <div class="text-center">
                    <i class="fas fa-users text-purple-600 text-4xl mb-4"></i>
                    <h2 class="text-xl font-bold mb-2">Lihat Peserta Didik</h2>
                    <p>Kelola data peserta didik yang sudah terdaftar.</p>
                </div>
            </a>
        </div>
    </main>
@endsection
