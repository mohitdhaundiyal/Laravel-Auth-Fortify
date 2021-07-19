@extends('layout')

@section('content')

    <style>
        .card {
            box-shadow: 0px 0px 10px rgba(46, 54, 68, 0.5);
            border: solid 2px transparent;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 1.5em;
        }

    </style>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card mt-3" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Register a new account
                    </h5>
                    <hr>
                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Name" />
                            @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Confirm Password">
                        </div>

                        <button class="btn btn-block btn-dark" type="submit"><i class="bi bi-box-arrow-in-right"></i>
                            Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
