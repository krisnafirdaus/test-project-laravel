<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PaketJasaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\PerusahaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/paketjasa', [PaketJasaController::class, 'index']);
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/perusahaan', [PerusahaanController::class, 'index']);
Route::get('/trainer', [TrainerController::class, 'index']);



