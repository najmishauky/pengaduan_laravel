<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginpetugasController;
use App\Http\Controllers\registerPetugasController;

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

Route::get('/hom',[homController::class, 'halaman_hom']);

Route::get('/about', function () {
    return view('about');
});




Route::get('/login', function () {
    return view('login');
});
Route::get('/loginpetugas', function () {
    return view('loginpetugas');
});

// Route::get('/registerpetugas', function () {
//     return view('registerpetugas');
// });

Route::get('/registerpetugas',[registerPetugasController::class, 'register']);
Route::post('/registerpetugas',[registerPetugasController::class, 'peroses_tambah']);

Route::get('/pengaduan',[pengaduanController::class, 'index']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::get('/isi_pengaduan',[pengaduanController::class, 'proses_isi_pengaduan']);
Route::post('/isi_pengaduan',[pengaduanController::class, 'proses_tambah_pengaduan']);

Route::get('/isi_masyarakat',[pengaduanController::class, 'proses_isi_masyarakat']);

Route::get('/pengaduan/{id}',[pengaduanController::class, 'detail_pengaduan']);

// Route::get('/pengaduan/{id}',[pengaduanController::class, 'update_pengaduan']);
Route::post('/pengaduan{id_pengaduan}', [pengaduanController::class, "update"]);
Route::get('/pengaduan{id_pengaduan}', [pengaduanController::class, "tampil_update"]);


Route::get('/hapus-pengaduan/{id}',[pengaduanController::class, 'hapus']);

Route::post('/login',[LoginController::class, 'login']);
Route::post('/loginpetugas',[LoginpetugasController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
