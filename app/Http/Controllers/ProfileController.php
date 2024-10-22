<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profil');
    }
    public function sejarah()
    {
        return view('profile.sejarah');
    }
    public function struktur()
    {
        return view('profile.struktur');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }

}
