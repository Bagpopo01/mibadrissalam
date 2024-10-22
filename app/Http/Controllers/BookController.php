<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Ambil semua data buku
        return view('books.index', compact('books'));
    }
    // Menampilkan detail buku
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
        $filePath = storage_path('app/public/' . $book->pdf_file);

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"'
        ]);
    }
    // Menampilkan Buku Bacaan
    public function bacaan()
    {
        $books = Book::where('category', 'Buku Bacaan')->get();
        return view('books.bacaan', compact('books'));
    }

    // Menampilkan Materi Pelajaran
    public function materiPelajaran()
    {
        $books = Book::where('category', 'Materi Pelajaran')->get();
        return view('books.materi_pelajaran', compact('books'));
    }

}
