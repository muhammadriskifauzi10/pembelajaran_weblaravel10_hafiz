<?php

namespace App\Http\Controllers\Daftarmahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Daftar Mahasiswa'
        ];

        return view('daftarmahasiswa.main', $data);
    }
}
