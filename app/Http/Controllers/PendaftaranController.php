<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Carbon\Carbon;

class PendaftaranController extends Controller
{
    // Metode create untuk menampilkan form pendaftaran
    public function create()
    {
        $noPendaftaran = $this->generateNomorPendaftaran();
        $userId = auth()->id(); // Ambil ID pengguna yang sedang login
        
        return view('pendaftaran.create', compact('noPendaftaran', 'userId'));
    }
    public function index()
    {
        // Ambil semua pendaftaran yang terkait dengan pengguna yang login
        $pendaftarans = Pendaftaran::where('user_id', auth()->id())->get();
    
        // Kembalikan view dengan data
        return view('pendaftaran.peserta_didik.index', compact('pendaftarans'));
    }
    public function show($id)
{
    // Ambil data peserta didik berdasarkan ID dan user_id yang login
    $pendaftaran = Pendaftaran::where('id', $id)
                              ->where('user_id', auth()->id())
                              ->firstOrFail();

    // Kembalikan view dengan data peserta didik
    return view('pendaftaran.peserta_didik.show', compact('pendaftaran'));
}

    
    // Metode untuk menyimpan data pendaftaran
    public function store(Request $request)
    {    // Periksa apakah pengguna sudah menambahkan 2 peserta didik
        $jumlahPeserta = Pendaftaran::where('user_id', auth()->id())->count();
    
        if ($jumlahPeserta >= 2) {
            // Jika sudah ada 2 peserta didik, redirect dengan pesan error
            return redirect()->route('pendaftaran.create')->withErrors(['message' => 'Anda hanya dapat menambahkan maksimal 2 peserta didik.']);
        }
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
            'tempat_tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'anak_ke' => 'required|string',
            'jumlah_saudara' => 'required|integer',
            'status_anak' => 'required|string',
            'bahasa_sehari_hari' => 'required|string',
            'golongan_darah' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'nama_ayah' => 'required|string',
            'tanggal_lahir_ayah' => 'required|date',
            'agama_ayah' => 'required|string',
            'pendidikan_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'kewarganegaraan_ayah' => 'required|string',
            'alamat_ayah' => 'required|string',
            'no_telepon_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'tanggal_lahir_ibu' => 'required|date',
            'agama_ibu' => 'required|string',
            'pendidikan_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'kewarganegaraan_ibu' => 'required|string',
            'alamat_ibu' => 'required|string',
            'no_telepon_ibu' => 'required|string',
            'foto_ijazah' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Opsional
            'foto_kk' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',      // Opsional
            'foto_ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',     // Opsional
            'foto_piagam' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',  // Opsional
        ]);

          // Tambahkan user_id dari pengguna yang sedang login
          $validated['user_id'] = auth()->id();
         

        $noPendaftaran = $this->generateNomorPendaftaran();
        Pendaftaran::create(array_merge($validated, ['no_pendaftaran' => $noPendaftaran]));

        return redirect()->route('custom.dashboard')->with('success', 'Pendaftaran berhasil!');
    }

    // Fungsi untuk menghasilkan nomor pendaftaran unik
    private function generateNomorPendaftaran()
    {
        $tanggalSekarang = Carbon::now()->format('dmY');
        $lastPendaftaran = Pendaftaran::latest()->first();
        $idBerikutnya = $lastPendaftaran ? $lastPendaftaran->id + 1 : 1;

        return 'MI' . $tanggalSekarang . str_pad($idBerikutnya, 4, '0', STR_PAD_LEFT);
    }
}

