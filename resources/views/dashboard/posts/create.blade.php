@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts"> {{-- diarahkan ke method store --}}
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="Slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="Slug" name="Slug">
            </div>
           
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = documetn.querySelectoe('#slug')

        /* Menangani fetch */
        title.addEventListener('change', function(){
            fetch('/dashboard/posts/createSlug?title= +' + title.value) // mengirim data title berdasarkan get
            .then(response => response.json())
            .then(data =>slug.value = data.slug)
        });
    </script>

@endsection