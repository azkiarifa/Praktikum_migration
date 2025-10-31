<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::create([
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Merpati No. 10',
            'email' => 'budi@example.com',
            'no_telepon' => '081234567890',
        ]);

        Pelanggan::create([
            'nama' => 'Siti Aminah',
            'alamat' => 'Jl. Kenanga No. 25',
            'email' => 'siti@example.com',
            'no_telepon' => '081298765432',
        ]);
    }
}