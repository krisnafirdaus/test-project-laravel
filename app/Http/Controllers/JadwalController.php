<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = [
            ['hari' => 'Senin', 'jam' => '08:00', 'trainer' => 'Trainer 1'],
            ['hari' => 'Selasa', 'jam' => '09:00', 'trainer' => 'Trainer 2'],
            // tambahkan data sesuai kebutuhan
        ];

        return view('jadwal.index', compact('jadwals'));
    }
}
