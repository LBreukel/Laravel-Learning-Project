@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Delete User</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('delete cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('account.edit',
                                                    ['account' => $account->id]) }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Edit the fields which need change
            </div>
            <div class="card-body">
                <form action="{{ route('account.destroy', $account) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input class="form-control" id="name" name="name" type="text" autocomplete="off"
                               value="{{ $account->name }}" placeholder="{{ $account->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input class="form-control" id="email" name="email" type="text"
                               autocomplete="off" value="{{ $account->email }}" placeholder="{{ $account->email }}"
                               disabled>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    @endcan

@endsection
