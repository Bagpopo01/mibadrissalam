<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number', 'name', 'gender', 'date_of_birth', 'address', 'religion', 
        'siblings_count', 'status', 'language_at_home', 'blood_type', 'physical_condition', 
        'father_name', 'father_birth_place', 'father_birth_date', 'father_religion', 
        'father_education', 'father_job', 'father_nationality', 'father_address', 
        'father_phone', 'mother_name', 'mother_birth_place', 'mother_birth_date', 
        'mother_religion', 'mother_education', 'mother_job', 'mother_nationality', 
        'mother_address', 'mother_phone', 'file_document',
    ];
}
