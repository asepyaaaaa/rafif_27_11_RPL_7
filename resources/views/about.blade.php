@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h2>{{ $nama }}</h2>
    <p>{{ $email }}</p>
    <img src="images/{{ $gambar }}" alt="gambarwd" width="250px">

@endsection