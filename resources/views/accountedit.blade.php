@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Edit Account</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('edit cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account.index') }}">Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account.delete',
                                                ['account'=>$account->id]) }}">Delete</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Edit the fields which need change
            </div>
            <div class="card-body">
                <form action="{{ route('account.update', $account) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="{{ $account->name }}"
                               autocomplete="off" value="{{ $account->name }}">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input class="form-control" id="email" name="email" type="text"
                               placeholder="{{ $account->email }}"
                               autocomplete="off" value="{{ $account->email }}">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input class="form-control" id="password" name="password" type="password"
                               placeholder="{{ $account->password }}"
                               autocomplete="off" value="{{ $account->password }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    @endcan
@endsection