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
                        Laravel 8 - Authentication System Using Fortify.
                    </h5>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">UI - Bootstrap - v5.0</li>
                        <li class="list-group-item">Email Testing  - MailTrap
                            <div class="text-muted">
                                Update your mailtrap configuration in .env file
                            </div>
                        </li>
                        <li class="list-group-item">twoFactorAuthentication - still in progress.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
