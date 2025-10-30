<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

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

// Data berita (global, untuk menghindari duplikasi)

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Gibran Bintang",
        "nohp" => "085157630844",
        "foto" => "corolla.jpg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/gibranbin', [MahasiswaController::class, 'index']);
Route::get('/gibranbin', function () {
    return view('mahasiswa', [
        "title" => "Data Mahasiswa",
        "nama" => "Gibran Bintang"
    ]);
});

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
    ]);
});