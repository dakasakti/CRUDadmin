@extends('layouts.auth')

@section('content')
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<form action="{{ route('auth') }}" method="post">
    @csrf
      <h1 class="h3 mb-3 font-weight-normal">Login <i class="bi bi-arrow-right-square"></i> </h1>
      <div class="form-floating">
          <input type="email" name="email"class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"
              required autofocus value="{{old ('email')}}" />
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
      </div>
      <div class="form-floating">
          <input type="password" name="password"class="form-control" id="password" placeholder="Password"
              required />
          <label for="password">Password</label>
      </div>

      <div class="d-grid">
          <button class="btn btn-lg btn-primary btn-block mt-2" type="submit"><a href="/home"></a>
              <i class="bi bi-box-arrow-in-right"></i>
              Login
          </button>
      </div>
  </form>
  <small class="d-block text-center mt-2"> Not Have Account <a href="{{ route('register') }}">Register Now! </a></small>   
@endsection