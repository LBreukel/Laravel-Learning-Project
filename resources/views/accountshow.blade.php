@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Account</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('account.index') }}">Back</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('account.edit',
                                          ['user'=>$account->id]) }}">Edit</a>
            </li>

        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Details
        </div>
        <div class="card-body">
            <strong>Name:</strong>
            <p>{{$account->name}}

            <p><strong>Email:</strong>
            <br>{{$account->email }}</p>
        </div>
    </div>

@endsection
