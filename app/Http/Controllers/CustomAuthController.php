<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.custom_login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba autentikasi pengguna
        if (Auth::guard('custom')->attempt($credentials)) {
            return redirect()->intended('/custom-dashboard')->with('success', 'You are logged in');
        } else {
            return back()->withErrors([
                'email' => 'Autentikasi gagal. Pastikan kredensial yang Anda masukkan benar.',
            ]);
        }
    }

    // Logout
    public function logout()
{
    Auth::guard('custom')->logout();
    return redirect('/custom-login')->with('success', 'You have been logged out');
}

}
