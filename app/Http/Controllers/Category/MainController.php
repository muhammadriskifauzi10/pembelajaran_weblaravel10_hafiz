<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Category',
            'judul' => 'Belajar Membuat Halaman Category',
            'paragraf' => 'Belajar'
        ];

        return view('category.main', $data);
    }
}
