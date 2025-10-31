<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailPesananController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelanggan', [PelangganController::class, 'pelanggan']);
Route::get('/produk', [ProdukController::class, 'produk']);
Route::get('/pesanan', [PesananController::class, 'pesanan']);
Route::get('/detail-pesanan', [DetailPesananController::class, 'detail_pesanan']);
