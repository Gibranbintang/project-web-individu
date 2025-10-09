<?php

use app\models\Berita;
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

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
    ]);
});
Route::get('/berita/{slug}', function ($slug) {


    // $new_berita = [];

    // foreach ($data_berita as $berita) {
    //     if ($berita["slug"] === $slugp) {
    //         $new_berita = $berita; // $berita isinya array = [ "judul", "slug", "penulis", "isi"]
    //     }
    // }



    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slug),
    ]);
});
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
    ]);
});