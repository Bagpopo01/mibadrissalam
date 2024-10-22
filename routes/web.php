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

use App\Http\Livewire\Register;



Route::prefix('ppdb')->group(function () {
    Route::get('/register', [PpdbAuthController::class, 'showRegisterForm'])->name('ppdb.register');
    Route::post('/register', [PpdbAuthController::class, 'register']);
});
Route::get('/register', Register::class)->name('register');
Route::get('/', [LandingController::class, 'landing'])->name('landing');


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

Route::prefix('ppdb')->group(function () {
    Route::get('/login', [PpdbAuthController::class, 'showLoginForm'])->name('ppdb.login');
    Route::post('/login', [PpdbAuthController::class, 'login']);
    Route::get('/register', [PpdbAuthController::class, 'showRegisterForm'])->name('ppdb.register');
    Route::post('/register', [PpdbAuthController::class, 'register']);
    Route::post('/logout', [PpdbAuthController::class, 'logout'])->name('ppdb.logout');

    Route::middleware('auth:ppdb')->group(function () {
        Route::get('/dashboard', function () {
            return view('ppdb.dashboard');
        })->name('ppdb.dashboard');
    });
});