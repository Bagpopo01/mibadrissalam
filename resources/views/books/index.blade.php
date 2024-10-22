@extends('layoutssss.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Daftar Buku</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($books as $book)
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-2">{{ $book->title }}</h2>
            <p class="text-gray-700 mb-4">Pengarang: {{ $book->author }}</p>
            <a href="{{ route('books.show', $book->id) }}" class="text-lime-500 hover:text-lime-700">
                Lihat Detail Buku
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
