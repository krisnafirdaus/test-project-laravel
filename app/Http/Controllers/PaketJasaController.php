<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketJasaController extends Controller
{
    public function index()
    {
        $paketjasas = [
            ['nama_paket' => 'Paket A', 'harga' => '5000000', 'deskripsi' => 'Ini adalah deskripsi untuk Paket A'],
            ['nama_paket' => 'Paket B', 'harga' => '8000000', 'deskripsi' => 'Ini adalah deskripsi untuk Paket B'],
            // tambahkan data sesuai kebutuhan
        ];

        return view('paketjasa.index', compact('paketjasas'));
    }
}
