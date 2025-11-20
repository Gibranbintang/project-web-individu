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
    public function tampildata($id)
    {
        $data = Mahasiswa::find($id);

        return view("edit", [
            "title" => "edit data mahasiswa",
            "data" =>$data,
        ]);

    }
    public function editdata(Request $request, $id)
    {
        $data = Mahasiswa::find($id);

        $data->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diedit!');
    }

}