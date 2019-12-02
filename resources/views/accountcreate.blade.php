@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Add User</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('create cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('account.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Fill in the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('account.index') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Admin Name">Name</label>
                        <input class="form-control" type="text" id="name" name="name"
                               placeholder="Admin Name"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input class="form-control" type="email" id="email" name="email"
                               placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Password"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <select name="role">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    @endcan

@endsection
