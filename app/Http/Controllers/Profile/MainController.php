<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Profile',
            'judul' => 'Belajar Membuat Halaman Profile',
            'paragraf' => 'Belajar'
        ];

        return view('profile.main', $data);
    }
}
