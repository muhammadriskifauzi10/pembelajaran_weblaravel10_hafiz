<?php

namespace App\Http\Controllers\Daftarmahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $data_mahasiswa = DB::table('daftar_mahasiswa')->get();

        $data = [
            'judul' => 'Daftar Mahasiswa',
            'data_mahasiswa' => $data_mahasiswa
        ];

        return view('daftarmahasiswa.main', $data);
    }
}
