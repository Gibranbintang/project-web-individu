<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = DB::table('mahasiswas')->get();
        
        return view('mahasiswa', [
            'title' => 'Data Mahasiswa',
            'mahasiswas' => $mahasiswas
        ]);
    } // ✅ TUTUP KURUNG KURAWAL INI PENTING!

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa', [
            "title" => "Tambah Data Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {
        // Insert data ke database
        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambah!');
    }
}