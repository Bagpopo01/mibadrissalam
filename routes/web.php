<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PPDBController;
use App\Models\Galeri;
use App\Models\Berita;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PpdbAuthController;
use App\Http\Controllers\CustomRegisterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Livewire\Register;

use App\Http\Controllers\CustomAuthController;


Route::middleware(['auth:custom'])->group(function () {
    Route::get('/pendaftaran/create', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
});

Route::middleware(['auth:custom'])->get('/peserta-didik/{id}', [PendaftaranController::class, 'show'])->name('peserta-didik.show');
Route::middleware(['auth:custom'])->get('/peserta-didik', [PendaftaranController::class, 'index'])->name('peserta-didik.index');

Route::middleware(['auth:custom'])->get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');


// Route untuk form login
Route::get('/custom-login', [CustomAuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login
Route::post('/custom-login', [CustomAuthController::class, 'login'])->name('custom.login');

// Route untuk logout
Route::post('/custom-logout', [CustomAuthController::class, 'logout'])->name('custom.logout');


// Route untuk form registrasi
Route::get('/custom-register', [CustomRegisterController::class, 'showRegistrationForm'])->name('custom.register.form');
Route::post('/custom-register', [CustomRegisterController::class, 'register'])->name('custom.register');

Route::get('/custom-dashboard', function () {
    $user = Auth::guard('custom')->user();
    return view('custom_dashboard', compact('user'));
})->middleware('auth:custom')->name('custom.dashboard');

// Verifikasi Email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth:custom')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [CustomRegisterController::class, 'verifyEmail'])
    ->middleware(['auth:custom', 'signed'])->name('verification.verify');

Route::post('/email/resend', [CustomRegisterController::class, 'resendVerification'])
    ->middleware(['auth:custom', 'throttle:6,1'])->name('verification.resend');




Route::get('/e-perpus', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/bacaan', [BookController::class, 'bacaan'])->name('book.bacaan');
Route::get('/materi_pelajaran', [BookController::class, 'materiPelajaran'])->name('book.materi_pelajaran');

Route::get('/galeri', function () {
    $galeri = Galeri::paginate(10);
    return view('galeri.index', compact('galeri')); // Pastikan variabel galeri yang dikirim
})->name('galeri.index');


Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/ppdb', [PPDBController::class, 'ppdb'])->name('pages.ppdb');
// Route::post('/ppdb/register', [PPDBController::class, 'register'])->name('ppdb.register');
Route::get('/profil', [ProfileController::class, 'index'])->name('profile.profil');
Route::get('/sejarah', [ProfileController::class, 'sejarah'])->name('profile.sejarah');
Route::get('/struktur', [ProfileController::class, 'struktur'])->name('profile.struktur');

Route::get('/duallogin', [ProfileController::class, 'duallogin'])->name('duallogin.duallogin');

Route::get('/berita', function () {
    $berita = Berita::paginate(10); // Mengambil 10 berita per halaman
    return view('berita.index', compact('berita')); // Mengembalikan view daftar berita
})->name('berita.index');

Route::get('/', function () {
    return view('pages.landing');
})->name('landing');
// Rute untuk login
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Route::prefix('ppdb')->group(function () {
//     Route::get('/login', [PpdbAuthController::class, 'showLoginForm'])->name('ppdb.login');
//     Route::post('/login', [PpdbAuthController::class, 'login']);
//     Route::get('/register', [PpdbAuthController::class, 'showRegisterForm'])->name('ppdb.register');
//     Route::post('/register', [PpdbAuthController::class, 'register']);
//     Route::post('/logout', [PpdbAuthController::class, 'logout'])->name('ppdb.logout');

//     Route::middleware('auth:ppdb')->group(function () {
//         Route::get('/dashboard', function () {
//             return view('ppdb.dashboard');
//         })->name('ppdb.dashboard');
//     });
// });