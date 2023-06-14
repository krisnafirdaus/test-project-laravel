<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = [
            'nama' => 'Perusahaan Belajar Stir',
            'lokasi' => 'Jakarta, Indonesia',
            'kontak' => '021-12345678',
        ];

        return view('perusahaan.index', compact('perusahaan'));
    }
}
