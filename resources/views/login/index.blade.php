@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-5">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin w-100 m-auto">

      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

      <form action="/login" method="post">
        @csrf

        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
          <label for="email">Email address</label>
          @error('email')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="email">Password</label>
        </div>
    
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

      </form>

      <small class="text-center d-block mt-3">not registered? 
        <a href="/register">Register now!</a>
      </small>

    </main>

  </div>
</div>


@endsection