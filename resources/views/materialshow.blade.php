@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Material</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="btn btn-secondary" href="{{ route('materials.index') }}">Back</a>
            </li>
                @can('edit gear')
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('materials.edit',
                 ['material' => $material->id]) }}">Edit Material</a>
                        @endcan
                    </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Material Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $material->name }}</h2>
            <p class="card-text">{{ $material->description }}</p>
        </div>
    </div>



@endsection