{{-- Untuk menampilakn (dump) dan memberthentikan error (die)--}}
{{-- @dd($blog_posts);   --}}


{{-- Mengambil parent ke child layout utama | layouts -> main extends to -> blog.blade.php 
        @extends('folder.namefile')
    --}}
@extends('layouts.main')

{{-- Bagian halaman add --}}
@section('container')
    <h1 class="mb-5">Post Category : {{  $category }} </h1>
    {{-- Apapaun yang ada pada section akan masuk menggantikan yield selama menggunakan layout utama --}}
    @foreach ($posts as $post) 
    <article class="mb-5">
        <h2>
            {{-- Akan mengarah kahalaam post tapi sekarang punta para,--}}
            {{-- Slug : versi lain dari titlle judul dari huruf besar--}}
            <a href="/posts/{{ $post->slug}}">{{ $post->title}} </a>  {{-- MEngambil berdasarkan ID --}}
        </h2>
        {!! $post->excerpt !!} {{-- {!! !!} Melakukan inputan esxeping tidak memasukan tex html --}}
    </article>
    @endforeach

@endsection
