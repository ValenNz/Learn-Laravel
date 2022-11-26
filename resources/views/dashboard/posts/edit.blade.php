@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data"> {{-- diarahkan ke method store --}}
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title" required autofocus value=" {{ old('title', $post->title) }}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div> 
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value=" {{ old('slug', $post->slug) }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <select class="form-select @error('category') is-invalid @enderror" name="category_id">
                    @foreach ($categories as $category)
                    @if(old('category_id',$post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else 
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
                @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div> 
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" type="hidden" name="oldImage" for="image"> Post Image</label>
                <input type="hidden" name="oldImage" valie="{{ $post->image}}">

                @if($post->image)
                    <img src="{{ assets('storage/' . $post->image) }}" class="img-preview img-fluid">
                @else
                    <img class="img-preview img-fluid">
                @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onechange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div> 
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">body</label>
                @error('body')
                    <p class="text-danger"> {{ $message }}</p>
                @enderror
                <input type="hidden" class="form-control" id="body" name="body" value="{{ old('body',$post->body) }}" >
                <trix-editor input="body"></trix-editor>
            </div>
           
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = documetn.querySelectoe('#slug');

        /* Menangani fetch */
        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title=' + title.value) // mengirim data title berdasarkan get
            .then(response => response.json())
            .then(data =>slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>

@endsection