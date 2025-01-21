<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Produk'
        ];

        return view('produk.main', $data);
    }
}
