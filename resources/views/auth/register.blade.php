@extends('layouts.auth')

@section('content')
    <form class="{{ route('register.store') }}" method="post">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Registeration <i class="bi bi-arrow-right-square"></i> </h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                id="name" placeholder="Name" />
            <label for="name">Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-floating">
                <input type="text" name="username" class="form-control
                    @error('username') is-invalid @enderror" id="username" placeholder="Username" />
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-floating">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="name@example.com" />
                        <label for="email">Email address</label>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control
                                @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" />
                            <label for="Password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Register
                            </button>
                        </div>
    </form>
    <small class="d-block text-center mt-2"> Have Account ? <a href="{{ route('login') }}">Please Login </a></small>    
@endsection