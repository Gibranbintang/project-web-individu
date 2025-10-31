<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kontak">Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/gibranbin">Mahasiswa</a>
        </li>
    </ul>

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
                        <button type="button" class="btn btn-sm btn-warning">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>