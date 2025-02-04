<?php

use App\Http\Controllers\Transaksi\MainController as TransaksiMainController;
use App\Http\Controllers\Product\MainController as ProductMainController;
use App\Http\Controllers\Daftarmahasiswa\MainController as DaftarmahasiswaMainController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tampilkangambar', function () {
    return view('viewgambar');
});


Route::get('/transaksi', [TransaksiMainController::class, 'index']);
Route::get('/produk', [ProductMainController::class, 'index']);
Route::get('/daftarmahasiswa', [DaftarmahasiswaMainController::class, 'index']);
