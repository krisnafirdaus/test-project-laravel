<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = [
            ['merk' => 'Toyota', 'model' => 'Avanza', 'tipe' => 'Matic', 'jumlah' => '5'],
            ['merk' => 'Honda', 'model' => 'Jazz', 'tipe' => 'Manual', 'jumlah' => '3'],
            // tambahkan data sesuai kebutuhan
        ];

        return view('kendaraan.index', compact('kendaraans'));
    }
}
