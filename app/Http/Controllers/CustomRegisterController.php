<?php

namespace App\Http\Controllers;

use App\Models\CustomUser; // Pastikan menggunakan model yang tepat
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class CustomRegisterController extends Controller
{
    // Menampilkan form registrasi
    public function showRegistrationForm()
    {
        return view('auth.custom_register');
    }

    // Proses registrasi pengguna baru
    public function register(Request $request)
    {
        // Validasi data registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:custom_users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        $user = CustomUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Login pengguna setelah registrasi
        Auth::login($user);

        // Mengirim email verifikasi
        event(new Registered($user));

        // Redirect ke halaman verifikasi
        return redirect()->route('verification.notice')->with('message', 'Verification link has been sent to your email.');
    }

    // Mengirim ulang email verifikasi
    public function resendVerification(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/custom-dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', 'A fresh verification link has been sent to your email address.');
    }

    // Verifikasi email pengguna
    public function verifyEmail($id, $hash)
    {
        $user = Auth::user();

        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            return redirect('/custom-login')->withErrors(['error' => 'Invalid verification link.']);
        }

        if ($user->markEmailAsVerified()) {
            return redirect('/custom-dashboard')->with('message', 'Email successfully verified.');
        }

        return redirect('/custom-login')->withErrors(['error' => 'Email verification failed.']);
    }
}
