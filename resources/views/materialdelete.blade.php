@extends('layout.layout')

@section('content')

    <h1 class="mt-5">Delete Material</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('delete cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('materials.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                You're about to delete something
            </div>
            <div class="card-body">
                <form action="{{ route('materials.destroy', $material) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                               placeholder="{{ $material->name }}" autocomplete="off" value="{{ $material->name }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text"
                                  placeholder="{{ $material->description }}" autocomplete="off"
                                  rows="10" disabled></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endcan
@endsection
