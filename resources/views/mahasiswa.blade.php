@extends('layouts.main')

@section('content')
  




<body>
    

    <div class="container mt-4">
        <h2>Data Mahasiswa</h2>
        
        <a href="tambahmahasiswa">
            <button type="button" class="btn btn-success mb-3">Tambah Data</button>
        </a>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $index => $mhs)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $mhs->name }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a href="tampildata/{{ $mhs ->id }}"class="btn btn-primary">Edit</a>
                        <a href="deletedata/{{ $mhs ->id }}"class="btn btn-danger" onclick="return confirm('yakin dihapus?')">Hapus</a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection