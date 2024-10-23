@extends('layoutssss.app')

@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Materi Pelajaran</h2>
    
    @if($books->isEmpty())
        <p>Tidak ada materi pelajaran tersedia.</p>
    @else
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($books as $book)
            <div class="bg-white shadow-md rounded-lg p-6">
                 <img src="{{ asset('storage/' . $book->gambar) }}" alt="{{ $book->judul }}" class="w-full h-auto object-cover mb-4 rounded" style="aspect-ratio: 16/9;"> <!-- Gambar tetap proporsional -->
                <h3 class="text-xl font-semibold">{{ $book->title }}</h3>
                <p class="text-gray-600">Penulis: {{ $book->author }}</p>

                <div class="mt-4 flex space-x-4">
                    <a href="{{ (asset('storage/' . $book->pdf_file)) }}" target="_blank">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                            Baca Buku
                        </button>
                    </a>
                    <a href="{{ asset('storage/' . $book->pdf_file) }}" download>
                        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600">
                            Download Buku
                        </button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
