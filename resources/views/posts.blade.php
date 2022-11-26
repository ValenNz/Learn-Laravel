{{-- Untuk menampilakn (dump) dan memberthentikan error (die)--}}
{{-- @dd($posts);   --}}


{{-- Mengambil parent ke child layout utama | layouts -> main extends to -> blog.blade.php 
        @extends('folder.namefile')
    --}}
@extends('layouts.main')

{{-- Bagian halaman add --}}
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    {{-- Searching --}}
    <div class="row justify-content-center mb-2">
        <div class="col-md-6">
            <form action="/posts" metgod="get">
                @if (request('category'))
                    <input type="hidden" name="category" v alue="{{ request ('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request ('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Main  --}}
    {{-- Hitung jumlah postingan --}}
    @if ($posts->count()) {{-- akan menghasilkan truw --}}
        <div class="card mb-3 text-center">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image)}}" alt="{{ $posts[0]->category->name }}" class="img-fluid">                    
                </div>
            @else
                <img src="https://picsum.photos/900/300" alt="" class="img-fluid">
            @endif
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark"></a>{{ $posts[0]->title }}</h3> {{-- posts -> index 0 terus ambil title --}}
            <p>
                <small class="text-muted">
                    By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none>">{{ $posts[0]->category->name }} </a> {{ $posts[0]->created_at->diffForHumans()}} 
                    {{-- diffForHumans() : fungsi untuk konversi created at ke menit--}}                
                </small>
            </p> {{-- membuat tampilan sesuai categories --}}
            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary" >Read more</a>
            </div>
        </div>

    {{-- Isi kotak kotak --}}
        {{-- Apapaun yang ada pada section akan masuk menggantikan yield selama menggunakan layout utama --}}
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post) 
            {{-- Looping --}}
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0 ,0 ,0.9)" ><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none"> {{ $post->category->name }} </a></div>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image)}}" alt="{{ $post->category->name }}" class="img-fluid">                    
                        @else
                            <img src="https://picsum.photos/200" width="800" height="300" class="card-img-top" alt="">
                        @endif
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p>
                        <small class="text-muted">
                            By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans()}} 
                            {{-- diffForHumans() : fungsi untuk konversi created at ke menit--}}                
                        </small>
                    </p> {{-- membuat tampilan sesuai categories --}}
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug}}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links()}}
    </div>

@endsection
