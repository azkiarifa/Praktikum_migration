<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function produk()
    {
        $data = Produk::all();
        return view('produk', compact('data'));
    }
}
