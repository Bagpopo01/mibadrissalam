<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita'; // Menentukan nama tabel// Tambahkan 'description' ke fillable

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];
}
