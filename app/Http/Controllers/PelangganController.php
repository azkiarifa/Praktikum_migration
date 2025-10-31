<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        $data = Pelanggan::all();
        return view('pelanggan', compact('data'));
    }
}
