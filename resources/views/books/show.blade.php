@extends('layoutssss.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $book->title }}</h1>
        <p class="text-gray-700 mb-4">Pengarang: {{ $book->author }}</p>

        <div class="min-h-screen relative">
    <!-- Isi konten PDF atau lainnya -->
    <div id="pdfViewer" class="w-full h-screen">
        <iframe src="{{ asset('storage/' . $book->pdf_file) }}" class="w-full h-full border-0"></iframe>
    </div>
</div>

        <!-- Opsi untuk mengunduh PDF -->
        <a href="{{ asset('storage/' . $book->pdf_file) }}" download class="text-lime-500 hover:text-lime-700 mt-4 inline-block">
            Unduh PDF
        </a>
    </div>
</div>





@endsection
