{{-- @dd($posts); --}}
@extends('layouts.main')
{{-- Bagian halaman navbar --}}

@section('container')

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    {{-- menangkap data yang terkirim --}} 
                    <h2 class="mb-2">{{ $post->title }}</h2>
                    <img src="https://picsum.photos/900/300" alt="" class="img-fluid">

                    <p class="mt-2">By. <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category=/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p> {{-- membuat tampilan sesuai categories --}}

                    <article class="my-3 fs-5">
                        {!! $post->body !!} {{-- Untuk inputan yang dimasukan tidak ada script html --}}
                    </article>
            
                    {{-- Kembali ke meu --}}
                    <a href="/posts" class="d-block mt-5 btn btn-primary">Back to posts</a>
                </div>
            </div>
        </div>

@endsection