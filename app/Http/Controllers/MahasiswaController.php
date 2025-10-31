<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
{
    $mahasiswas = DB::table('mahasiswas')->get();
    
   // Tambahkan ini untuk debug
    
    return view('mahasiswa', [
        'mahasiswas' => $mahasiswas
    ]);
}
}