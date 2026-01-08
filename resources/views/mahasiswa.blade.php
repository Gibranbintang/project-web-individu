@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2>Data Mahasiswa</h2>
    
    <div class="row mt-4">
        <a href="/tambahmahasiswa">
            <button type="button" class="btn btn-success mb-2">
                Tambah Data
            </button>
        </a>
        
        <!-- SweetAlert Success Message -->
        @if ($message = Session::get('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "{{ $message }}",
                        icon: "success"
                    });
                });
            </script>
        @endif
        
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
                <?php $i = 1 ?>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $mahasiswa->name }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>
                            <a href="/tampildata/{{ $mahasiswa->id }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>
                            <a href="#" 
                               class="btn btn-sm btn-danger delete"
                               data-id="{{ $mahasiswa->id }}"
                               data-nama="{{ $mahasiswa->name }}">
                                Hapus
                            </a>
                        </td>
                        <?php $i++ ?>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.js" 
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
        crossorigin="anonymous"></script>

<!-- Delete Confirmation Script -->
<script>
    $('.delete').click(function () {
        let id = $(this).attr('data-id');
        let nama = $(this).attr('data-nama');
        
        Swal.fire({
            title: "Are you sure?",
            text: "Data " + nama + " akan terhapus.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/" + id;
            }
        });
    });
</script>
@endsection