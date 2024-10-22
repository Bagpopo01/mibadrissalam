@extends('layoutssss.app')

@section('title', 'Penerimaan Peserta Didik Baru (PPDB)')

@section('content')
    <div class="container mx-auto py-20">
        <h1 class="text-4xl font-bold text-center text-green-600 mb-12">Penerimaan Peserta Didik Baru (PPDB)</h1>

        <!-- Sekilas Informasi PPDB -->
        <div class="bg-white shadow-lg p-20 rounded-lg mb-12">
            <h2 class="text-3xl font-bold text-green-600 mb-6">Informasi Umum PPDB</h2>
            <p class="text-lg text-gray-700 mb-6">
                Penerimaan Peserta Didik Baru (PPDB) di MI Badrissalam akan segera dibuka. Berikut adalah informasi lengkap terkait proses pendaftaran, syarat-syarat yang harus dipenuhi, dan jadwal pendaftaran.
            </p>
        </div>

        <!-- Syarat Pendaftaran -->
        <div class="bg-lime-500 shadow-lg p-8 rounded-lg text-white mb-12">
            <h2 class="text-3xl font-bold mb-6">Syarat Pendaftaran</h2>
            <ul class="list-disc list-inside text-lg">
                <li class="mb-2">Fotokopi Akta Kelahiran</li>
                <li class="mb-2">Fotokopi Kartu Keluarga (KK)</li>
                <li class="mb-2">Fotokopi Ijazah atau SKL (Surat Keterangan Lulus) dari TK/RA</li>
                <li class="mb-2">Pas foto ukuran 3x4 (4 lembar)</li>
                <li class="mb-2">Surat Keterangan Sehat dari Dokter</li>
            </ul>
        </div>

        <!-- Alur Pendaftaran -->
        <div class="bg-white shadow-lg p-8 rounded-lg mb-12">
            <h2 class="text-3xl font-bold text-green-600 mb-6">Alur Pendaftaran</h2>
            <ol class="list-decimal list-inside text-lg text-gray-700">
                <li class="mb-2">Mengambil formulir pendaftaran di kantor sekolah atau <a href="{{ url('/download-form') }}" class="text-green-500 font-bold hover:underline">download formulir di sini</a>.</li>
                <li class="mb-2">Mengisi formulir pendaftaran dengan lengkap dan benar.</li>
                <li class="mb-2">Menyerahkan formulir beserta dokumen persyaratan ke panitia PPDB di sekolah.</li>
                <li class="mb-2">Menunggu pengumuman hasil seleksi melalui website atau di papan pengumuman sekolah.</li>
            </ol>
        </div>

        <!-- Jadwal Pendaftaran -->
        <div class="bg-lime-500 shadow-lg p-8 rounded-lg text-white mb-12">
            <h2 class="text-3xl font-bold mb-6">Jadwal Pendaftaran</h2>
            <ul class="list-disc list-inside text-lg">
                <li class="mb-2">Pendaftaran Dibuka: 1 Juni 2024</li>
                <li class="mb-2">Pendaftaran Ditutup: 30 Juni 2024</li>
                <li class="mb-2">Pengumuman Hasil Seleksi: 5 Juli 2024</li>
                <li class="mb-2">Daftar Ulang: 7-14 Juli 2024</li>
            </ul>
        </div>

        <!-- Tombol Aksi -->
        <div class="text-center mt-12">
            <a href="{{ asset('form/formulir.pdf') }}" class="bg-green-600 text-white font-bold py-3 px-6 rounded-full hover:bg-green-700 transition duration-300 inline-block mb-4">
                Download Formulir Pendaftaran
            </a>
            <a href="" class="bg-lime-500 text-white font-bold py-3 px-6 rounded-full hover:bg-lime-600 transition duration-300 inline-block">
                Daftar Online
            </a>
        </div>
    </div>
@endsection
