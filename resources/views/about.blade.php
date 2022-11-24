{{-- Mengambil parent ke child layout utama | layouts -> main extends to -> aboute.blade.php 
        @extends('folder.namefile')
    --}}
@extends('layouts/main')

{{-- Bagian halaman navbar --}}
@section('container')
    {{-- Apapaun yang ada pada section(bagian) akan masuk menggantikan yield selama menggunakan layout utama --}}
    <h1>Halaman About</h1>
    {{-- Memanggil Data yang Dikirim dari Web berdasarkan key --}}
    <h3>{{ $name; }}</h3>
    <p>{{ $email; }}</p>
    <img src="img/{{ $image; }}" alt="{{ $name; }}" width="200" class="img-thumbnail rounded-circle">
@endsection
