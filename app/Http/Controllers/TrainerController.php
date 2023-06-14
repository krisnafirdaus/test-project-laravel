<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = [
            ['nama' => 'Trainer 1', 'pengalaman' => '5 tahun'],
            ['nama' => 'Trainer 2', 'pengalaman' => '7 tahun'],
            // tambahkan data sesuai kebutuhan
        ];

        return view('trainer.index', compact('trainers'));
    }
}
