<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',                     // Nama
        'gender',                   // Jenis Kelamin
        'date_of_birth',           // Tanggal Lahir
        'place_of_birth',          // Tempat Lahir
        'address',                  // Alamat
        'phone',                    // No Telepon
        'religion',                 // Agama
        'siblings_count',          // Jumlah Saudara
        'status',                   // Status (Yatim/Piatu)
        'language_at_home',        // Bahasa Sehari-hari di Rumah
        'blood_type',               // Golongan Darah
        'physical_condition',       // Kondisi Jasmani
        'father_name',              // Nama Ayah
        'father_birth_place',       // Tempat Lahir Ayah
        'father_birth_date',        // Tanggal Lahir Ayah
        'father_religion',          // Agama Ayah
        'father_education',         // Pendidikan Tertinggi Ayah
        'father_job',               // Pekerjaan Ayah
        'father_nationality',       // Kewarganegaraan Ayah
        'father_address',           // Alamat Ayah
        'father_phone',             // No Telepon Ayah
        'mother_name',              // Nama Ibu
        'mother_birth_place',       // Tempat Lahir Ibu
        'mother_birth_date',        // Tanggal Lahir Ibu
        'mother_religion',          // Agama Ibu
        'mother_education',         // Pendidikan Tertinggi Ibu
        'mother_job',               // Pekerjaan Ibu
        'mother_nationality',       // Kewarganegaraan Ibu
        'mother_address',           // Alamat Ibu
        'mother_phone',             // No Telepon Ibu
    ];
}
