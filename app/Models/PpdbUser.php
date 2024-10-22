<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class PpdbUser extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Jika tabel yang digunakan berbeda dari nama model
    protected $table = 'ppdbusers';
}
