<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailPesanan;

class DetailPesananController extends Controller
{
    public function detail_pesanan()
    {
        $data = DetailPesanan::all();
        return view('detail_pesanan', compact('data'));
    }
}
