<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class PpdbAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('ppdb.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('ppdb')->attempt($credentials)) {
            return redirect()->intended('/ppdb/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view('ppdb.register');
    }

    public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:ppdbusers,email',
        'password' => 'required|min:6|confirmed',
    ]);

    // Simpan data ke database
    PpdbUser::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash password sebelum menyimpan
    ]);

    // Redirect setelah registrasi berhasil
    return redirect('/ppdb/login')->with('success', 'Registration successful. Please log in.');
}

    public function logout()
    {
        Auth::guard('ppdb')->logout();
        return redirect('/ppdb/login');
    }
}
