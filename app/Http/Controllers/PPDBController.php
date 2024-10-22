<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonPesertaDidik; // Pastikan Anda sudah membuat model CalonPesertaDidik

class PPDBController extends Controller
{
    public function ppdb()
    {
        return view('pages.ppdb');
    }

    public function register(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
        ]);

        // Simpan data ke database
        CalonPesertaDidik::create($validatedData);

        return redirect()->route('ppdb.index')->with('success', 'Pendaftaran berhasil!');
    }
}
