@extends('layoutssss.app')

@section('title', 'Sejarah Singkat Sekolah')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-4xl text-center font-bold text-green-600 mb-8">Sejarah Singkat Sekolah</h1>
    
    <div class="flex flex-col md:flex-row items-center">
        <!-- Foto Kepala Sekolah -->
        <div class="md:w-1/2 w-full mb-8 md:mb-0 flex justify-center">
            <img src="{{ asset('images/sekolah.jpg') }}" alt="Kepala Sekolah" class="rounded-lg shadow-lg w-[400px] h-[400px] object-cover">
        </div>

        <!-- Deskripsi Kepala Sekolah -->
        <div class="md:w-1/2 w-full md:pl-8">
            <h2 class="text-2xl font-bold text-green-600 mb-4">MI BADRISSALAM</h2>
            <p class="text-lg text-gray-700 mb-4">
            MI Badrissalam adalah salah satu MI swasta di bawah naungan Kementerian Agama dan beyayasan di Lembaga Pendidikan Ma’arif NU kabupaten Boyolali beralamat di Tugurejo 003/003 Sukorejo Musuk Boyolali. Mi Badrissalam di dirikan sejak tahun 1951 oleh warga masyarakat sekitar yang peduli akan pendidikan terutama pendidikan keagamaan yang berguna kelak bagi kepribadian, pemikiran, serta akhlak anak anak warga sekitar lingkungan madrasah khusunya dan wilayah desa sukorejo pada umumnya
            </p>
        </div>
    </div>
</div>
@endsection
