@extends('layouts.main')

@section('content')
<h1>profile</h1>

<h2>{{ $nama }}</h2>
<h3>{{ $nohp }}</h3>
<img src="{{ asset('img/' . $foto) }}" width="100px" />

@endsection