@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Editing Material</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('edit cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('materials.index') }}">Back</a>
                </li>
                @can('edit gear')
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('materials.delete',
                 ['material' => $material->id]) }}">Delete Material</a>
                        @endcan
                    </li>
            </ul>
        </nav>
        <div class="card">
            <div class="card-header">
                Change the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('materials.update', $material) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                               placeholder="{{ $material->name }}" autocomplete="off" value="{{ $material->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" type="text" rows="10"
                                  autocomplete="off"
                                  placeholder="{{ $material->description }}"> {{ $material->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    @endcan
@endsection

