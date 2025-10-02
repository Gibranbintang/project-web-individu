<?php

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

Route::get('/', function () {
    return view('home',[
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

Route::get('/berita', function () {

$data_berita = [
    [
        "judul" => "berita 1",
        "penulis" => "Bintang",
        "konten" => "Gempa ringan mengguncang Jawa Barat, warga segera dievakuasi ke tempat aman",
    ],
    [
        "judul" => "berita 2",
        "penulis" => "suroso",
        "konten" => "Timnas U-23 berhasil lolos ke final setelah menang tipis lewat adu penalti.",
    ],
    [
        "judul" => "berita 3",
        "penulis" => "kafka",
        "konten" => "Harga BBM turun serentak, masyarakat sambut gembira perubahan kebijakan pemerintah",
    ],
];



    return view('berita',[
        "title" => "berita",
        "beritas" => $data_berita
        
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "kontak",
    ]);
});
