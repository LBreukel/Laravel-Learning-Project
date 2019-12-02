@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Alchemy</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                @can('edit alchemy')
                    <a class="btn btn-secondary" href="{{route('alchemy.index') }}">Back</a>
            </li>
            <li>
                <a class="btn btn-primary" href="{{route('alchemy.edit', ['alchemy'=>$alchemy->id]) }}">Edit</a>
                @endcan
            </li>
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Details
        </div>
        <div class="card-body">

            <h2 class="card-title">{{$alchemy->name}}</h2>
            <h4>Ingredients needed for 1:</h4>
            <p class="card-text">{{$alchemy->attribute }}</p>

            <p><strong>NOTE:</strong> In the Black Desert the craft is heavily affected by your skill level.
                At higher
                skill levels you can use less materials and get more products.</p>

            <p>For all recipes/designs you can use the general substitution rules:
                <br>- 1 ingredient of green grade can be replaced by 2-3 white grade ingredients and vice
                versa.
                <br>- 1 ingredient of blue grade can be replaced by 3-5 white grade ingredients and vice
                versa.
                <br>- 1 fresh fish can be replaced by 2 dried fishes and vice versa.
            </p>
        </div>

    </div>

@endsection
