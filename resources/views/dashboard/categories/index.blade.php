@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success')}}
    </div>
    @endif

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/posts/create" class="btn btn-info">+create</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name}}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-info">see</i></a>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning">edit</i></a>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button  class="btn btn-danger border-0 " onclick="return confirm ('Are you sure??')">delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
           
          </tbody>
        </table>
      </div>
@endsection