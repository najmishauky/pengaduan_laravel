<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;

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

Route::get('/hom',[pengaduanController::class, 'halaman_hom']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/pengaduan',[pengaduanController::class, 'index']);

Route::get('/isi_pengaduan',[pengaduanController::class, 'proses_isi_pengaduan']);
Route::post('/isi_pengaduan',[pengaduanController::class, 'proses_tambah_pengaduan']);

Route::get('/isi_masyarakat',[pengaduanController::class, 'proses_isi_masyarakat']);

Route::get('/pengaduan/{id}',[pengaduanController::class, 'detail_pengaduan']);

Route::get('/pengaduan/{id}',[pengaduanController::class, 'update_pengaduan']);

Route::get('/hapus-pengaduan/{id}',[pengaduanController::class, 'hapus']);

Route::post('/login',[LoginController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
