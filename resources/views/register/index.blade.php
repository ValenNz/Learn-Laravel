@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-4 mt-9">
      <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
        <form action="/register" method="post">
            @csrf
          <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" required value="{{ old('name') }}">
            <label for="name">Name</label>
            @error('name') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror            
         </div>
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name='username' placeholder="username" required value="{{ old('nama') }}" >
              <label for="username">Username</label>  
              @error('username') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('nama') }}" >
            <label for="floatingInput">Email address</label>
            @error('email') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
          </div>
          <div class="form-floating @error('password') is-invalid @enderror" >
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name="password" required>
            <label for="floatingPassword">Password</label>
            @error('password') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
        </form>
        <small class="d-block text-center mt-2">Already Registed <a href="/login">Login Now</a></small>
      </main>
    </div>
  </div>
@endsection