<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri'; // Menentukan nama tabel// Tambahkan 'description' ke fillable

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}