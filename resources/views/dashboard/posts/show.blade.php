@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                {{-- menangkap data yang terkirim --}} 
                <h2 class="mb-2">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-info"><- see all</i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">edit</i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button  class="btn btn-danger border-0 " onclick="return confirm ('Are you sure??')">delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}" class="img-fluid mt3">                    
                    </div>
                @else
                    <img src="https://picsum.photos/900/300" alt="" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!} {{-- Untuk inputan yang dimasukan tidak ada script html --}}
                </article>

            </div>
        </div>
    </div>
@endsection