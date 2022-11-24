{{-- Mengambil parent ke child layout utama | layouts -> main extends to -> home.blade.php 
        @extends('folder.namefile')
    --}}
@extends('layouts.main')

{{-- Bagian halaman navbar --}}
@section('container')
    {{-- Apapaun yang ada pada section(bagian) akan masuk menggantikan yield selama menggunakan layout utama --}}
    <h1>Halaman Home</h1>
@endsection