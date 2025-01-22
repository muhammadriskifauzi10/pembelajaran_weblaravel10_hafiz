<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data_sabun = [
            [
                'nama_produk' => 'Sabun Lifeboy',
                'harga' => 5000,
                'qty' => 5,
            ],
            [
                'nama_produk' => 'Sabun Nuvo',
                'harga' => 6000,
                'qty' => 50,
            ],
            [
                'nama_produk' => 'Indomie Goreng',
                'harga' => 3500,
                'qty' => 10,
            ],
        ];

        $data = [
            'judul' => 'Produk',
            'data_sabun' => $data_sabun
        ];

        return view('produk.main', $data);
    }
}
