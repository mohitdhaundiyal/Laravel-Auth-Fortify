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
                       Dashboard
                    </h5>   
                    <hr>         
                    <p class="card-text lead">
                        Welcome {{ ucwords(Auth::user()->name) }}</p>      
                </div>
            </div>
        </div>
    </div>
@endsection
