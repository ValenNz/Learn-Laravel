@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                {{-- menangkap data yang terkirim --}} 
                <h2 class="mb-2">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-info"><- see all</i></a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-warning">edit</i></a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger">delete</i></a>

                <img src="https://picsum.photos/900/300" alt="" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!} {{-- Untuk inputan yang dimasukan tidak ada script html --}}
                </article>
        
                {{-- Kembali ke meu --}}
                <a href="/posts" class="d-block mt-5 btn btn-primary">Back to posts</a>
            </div>
        </div>
    </div>
@endsection