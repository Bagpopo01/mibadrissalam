<?php

namespace App\Http\Controllers;

use App\Models\Berita; // Pastikan model yang benar
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show($id)
    {
        // Mengambil berita berdasarkan ID
        $beritaItem = Berita::findOrFail($id);

        // Mengambil berita terbaru
        $recentBerita = Berita::orderBy('created_at', 'desc')->take(5)->get();

        // Mengembalikan view dengan data yang diperlukan
        return view('berita.show', compact('beritaItem', 'recentBerita'));
    }
}
