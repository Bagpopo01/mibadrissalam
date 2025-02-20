@extends('layoutssss.app')

@section('title', 'Galeri Gambar')

@section('content')
<div class="container mx-auto py-16">
    <h1 class="text-4xl font-bold text-center text-green-600 mb-8">Galeri Gambar</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($galeri as $item)
        <div>
            <a href="{{ asset('storage/' . $item->image) }}" data-lightbox="galeri" data-title="{{ $item->title }}">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-auto object-cover rounded">
            </a>
            
        </div>
        @endforeach
    </div>
</div>
@endsection
