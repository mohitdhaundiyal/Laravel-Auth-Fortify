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
                        Reset Password
                    </h5>
                    <hr>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session ('status') }}
                    </div>    
                    @endif
                    <form action="{{ route('password.request') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control mb-2 @error('email') is-invalid @enderror" name="email"
                                placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-block btn-dark" type="submit"><i class="bi bi-arrow-counterclockwise"></i>
                            Reset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
