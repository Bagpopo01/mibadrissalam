@extends('layoutssss.app')

@section('title', 'Profil Kepala Sekolah')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-4xl font-bold text-green-600 mb-8">Profil Kepala Sekolah</h1>
    
    <div class="flex flex-col md:flex-row items-center">
        <!-- Foto Kepala Sekolah -->
        <div class="md:w-1/2 w-full mb-8 md:mb-0 flex justify-center">
            <img src="{{ asset('images/kepalasekolah.jpg') }}" alt="Kepala Sekolah" class="rounded-lg shadow-lg w-[400px] h-[400px] object-cover">
        </div>

        <!-- Deskripsi Kepala Sekolah -->
        <div class="md:w-1/2 w-full md:pl-8">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Ibu [Nur Alfiyah]</h2>
            <p class="text-lg text-gray-700 mb-4">
                Kepala madrasah ibtidaiyah badrissalam saat ini adalah Ibu Nur Alfiyah, S.Pd.I. Beliau adalah putri daerah di wilayah Sukorejo. Beliau merupakan lulusan S1-PAI prodi tarbiyah di Institut Islam Mambaul Ulum Surakarta tahun 2006. Beliau memulai karir sebagai seorang pendidik dari tahun 1999 dan kemudian diangkat menjadi kepala pada tahun 2013.
            </p>
        </div>
    </div>
</div>
@endsection
