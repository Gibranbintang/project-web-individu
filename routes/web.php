<?php

use App\Http\Controllers\AuthController;
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



Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/gibranbin', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
    ]);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout route (untuk yang sudah login)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Route yang HARUS LOGIN (menggunakan middleware auth)
Route::middleware(['auth'])->group(function () {
    
    Route::get('/profile', function () {
        return view('profile', [
            "nama" => "Gibran Bintang",
            "nohp" => "085157630844",
            "foto" => "corolla.jpg",
        ]);
    });

Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'] )->name('tambahmahasiswa');

Route::post('/insertdata', [MahasiswaController::class, 'insertdata'] )->name('insertdata');

Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');

Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'] )->name('editdata');

Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'] )->name('deletedata');



});
