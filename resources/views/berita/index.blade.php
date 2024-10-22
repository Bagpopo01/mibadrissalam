@extends('layoutssss.app')

@section('title', 'Daftar Berita')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-4xl font-bold text-center text-green-600 mb-8">Berita Terbaru</h1>

    <!-- Grid Layout untuk Daftar Berita -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> <!-- 3 kolom di layar besar -->
        @foreach($berita as $item) <!-- Mengganti news dengan berita -->
        <div class="bg-lime-500 shadow-lg p-6 rounded-lg flex flex-col mb-6" data-aos="fade-up" data-aos-delay="100">
            <!-- Gambar Berita -->
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-auto object-cover mb-4 rounded" style="aspect-ratio: 16/9;"> <!-- Gambar tetap proporsional -->

            <!-- Konten Berita -->
            <div class="flex-1">
                <h3 class="text-2xl font-bold text-white mb-2">{{ $item->judul }}</h3>
                <p class="text-white mb-4">{{ Str::limit($item->isi, 100) }}</p> <!-- Menggunakan 'isi' untuk konten -->
            </div>

            <!-- Tombol Baca Selengkapnya -->
            <a href="{{ route('berita.show', $item->id) }}" class="bg-green-600 text-white font-bold py-2 px-4 rounded-full hover:bg-green-500 transition duration-300 text-center mt-auto">
                Baca Selengkapnya
            </a>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{ $berita->links() }} <!-- Mengganti news dengan berita -->
    </div>
</div>
@endsection
