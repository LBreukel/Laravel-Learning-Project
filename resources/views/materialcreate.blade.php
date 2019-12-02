@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Create Material</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('create cooking')

        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('materials.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Fill in the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('materials.index') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                               autocomplete="off"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description"
                                  autocomplete="off" cols="50" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endcan

@endsection

