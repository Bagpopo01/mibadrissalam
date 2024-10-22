@extends('layoutssss.app')

@section('title', $beritaItem->title) <!-- Mengganti newsItem dengan beritaItem -->

@section('content')
<div class="container mx-auto py-16">
    <!-- Grid Layout: Detail Berita di Kiri, Recent Berita di Kanan -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Detail Berita (Kolom Kiri) -->
        <div class="lg:col-span-2">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Gambar Berita -->
                <img src="{{ asset('storage/' . $beritaItem->gambar) }}" alt="{{ $beritaItem->title }}" class="w-full h-64 object-cover"> <!-- Mengganti image dengan gambar -->
                
                <!-- Konten Berita -->
                <div class="p-6">
                    <h1 class="text-3xl font-bold mb-4">{{ $beritaItem->title }}</h1>
                    <p class="text-gray-700 mb-4">{{ $beritaItem->created_at->format('d M, Y') }}</p>
                    <p class="text-gray-700">{{ $beritaItem->isi }}</p> <!-- Mengganti content dengan isi -->
                </div>
            </div>

            <!-- Tombol Kembali ke Daftar Berita -->
            <a href="{{ route('berita.index') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Kembali ke Daftar Berita
            </a>
        </div>

        <!-- Recent Berita (Kolom Kanan) -->
        <div class="lg:col-span-1">
            <h2 class="text-2xl font-bold mb-4">Berita Terbaru</h2>
            <ul>
                @foreach($recentBerita as $recent) <!-- Mengganti recentNews menjadi recentBerita -->
                <li class="mb-4">
                    <a href="{{ route('berita.show', $recent->id) }}" class="block bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/' . $recent->gambar) }}" alt="{{ $recent->title }}" class="w-full h-32 object-cover"> <!-- Mengganti image dengan gambar -->
                        <div class="p-4">
                            <h3 class="text-lg font-bold">{{ $recent->title }}</h3>
                            <p class="text-gray-600 text-sm">{{ $recent->created_at->format('d M, Y') }}</p>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
