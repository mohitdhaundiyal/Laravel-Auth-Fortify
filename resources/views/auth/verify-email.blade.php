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
                <div class="card-body text-center">
                    <h6 class="card-title">
                        You must verify your email address. <br>
                        Please check your email for a verification link.
                    </h6>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success mt-3">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <button class="btn btn-block btn-dark" type="submit"><i class="bi bi-arrow-counterclockwise"></i>
                            Resend Email
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
