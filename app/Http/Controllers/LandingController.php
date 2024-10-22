<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        // Ambil 10 gambar dari database
        $gambar = Galeri::limit(10)->get(); // Mengambil 10 gambar

        // Mengembalikan view dan mengirim variabel $gambar
        return view('pages.landing', compact('gambar'));
    }
}
