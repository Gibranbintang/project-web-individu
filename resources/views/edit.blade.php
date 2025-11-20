@extends('layouts.main')

@section('content')
  




    <div class="container mt-5">
        <h2>{{ $title }}</h2>
        
        <form action="/editdata/{{$data->id}}"  method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" value ="{{$data->name}}"class="form-control" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" value ="{{$data->nim}}"class="form-control" required>
            </div>
            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" value ="{{$data->prodi}}"class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value ="{{$data->email}}"class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan edit</button>
            <a href="/gibranbin" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
@endsection