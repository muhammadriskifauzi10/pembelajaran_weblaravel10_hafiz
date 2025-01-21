<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            'judul' => 'Transaksi'
        ];

        return view('transaksi.main', $data);
    }
}
