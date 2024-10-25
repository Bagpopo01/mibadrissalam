<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('students.create'); // Pastikan path view sesuai dengan file Blade kamu
    }
    public function index()
    {
        // Ambil semua data dari tabel students
        $students = Student::all();

        // Kirim data ke view
        return view('students.index', compact('students'));
    }
    public function show($id)
{
    // Ambil data student berdasarkan ID
    $student = Student::findOrFail($id);

    // Kirim data ke view
    return view('students.show', compact('student'));
}

    // Menyimpan data dari form ke dalam tabel students
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'address' => 'nullable|string',
            'religion' => 'nullable|string',
            'siblings_count' => 'nullable|integer',
            'status' => 'nullable|string',
            'language_at_home' => 'nullable|string',
            'blood_type' => 'nullable|string',
            'physical_condition' => 'nullable|string',
            'father_name' => 'nullable|string|max:255',
            'father_birth_place' => 'nullable|string',
            'father_birth_date' => 'nullable|date',
            'father_religion' => 'nullable|string',
            'father_education' => 'nullable|string',
            'father_job' => 'nullable|string',
            'father_nationality' => 'nullable|string',
            'father_address' => 'nullable|string',
            'father_phone' => 'nullable|string',
            'mother_name' => 'nullable|string|max:255',
            'mother_birth_place' => 'nullable|string',
            'mother_birth_date' => 'nullable|date',
            'mother_religion' => 'nullable|string',
            'mother_education' => 'nullable|string',
            'mother_job' => 'nullable|string',
            'mother_nationality' => 'nullable|string',
            'mother_address' => 'nullable|string',
            'mother_phone' => 'nullable|string',
            'file_document' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Jika ada file, simpan file dan dapatkan path-nya
        if ($request->hasFile('file_document')) {
            $path = $request->file('file_document')->store('documents', 'public');
            $validated['file_document'] = $path;
        }

        // Buat nomor pendaftaran unik
        $today = date('d-m-Y');
        $lastStudent = Student::latest()->first();
        $id = $lastStudent ? $lastStudent->id + 1 : 1;
        $registrationNumber = "Mi{$today}-{$id}";
        $validated['registration_number'] = $registrationNumber;

        // Simpan data ke tabel students
        Student::create($validated);

        // Redirect ke halaman lain setelah berhasil menyimpan
        return redirect()->route('students.create')->with('success', 'Data berhasil disimpan!');
    }
}
