@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Gear item</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="btn btn-secondary" href="{{ route('gearitems.index') }}">Back</a>
            </li>
                @can('edit gear')
            <li class="nav-item">
                <a class="btn btn-primary" href="{{ route('gearitems.edit',
                 ['gearitem' => $gearitem->id]) }}">Edit Gearitem</a>
                @endcan
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Gearitem Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $gearitem->name }}</h2>
            <p class="card-text">Gearstats: {{ $gearitem->gearstats }}</p>
            <p class="card-text">Category: {{ $gearitem->category }}</p>
            <p class="card-text">Gearset :{{ $gearitem->gearset }}</p>
            <p class="card-text">Attribute: {{ $gearitem->attribute }}</p>
            <p class="card-text">Guidenumber: {{ $gearitem->guidenumber }}</p>
        </div>
    </div>



@endsection