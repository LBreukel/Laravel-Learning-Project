@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Cooking Item</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="btn btn-secondary" href="{{route('cooking.index') }}">Back</a>
            </li>
            @can('edit cooking')
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{route('cooking.edit',
                                            ['cooking'=>$cooking->id]) }}">Edit</a>
                </li>
            @endcan
        </ul>
    </nav>

    <div class="card">
        <div class="card-header">
            Cookingitem Details
        </div>
        <div class="card-body">
            <h2 class="card-title">{{$cooking->name}}</h2>
            <h4>Ingredients needed for 1:</h4>
            <p class="card-text">{{$cooking->attribute }}</p>

            <p><strong>NOTE:</strong> In the Black Desert the craft is heavily affected by your skill level. At higher
                skill levels you can use less materials and get more products.</p>

            <p>For all recipes/designs you can use the general substitution rules:
                <br>- 1 ingredient of green grade can be replaced by 2-3 white grade ingredients and vice versa.
                <br>- 1 ingredient of blue grade can be replaced by 3-5 white grade ingredients and vice versa.
                <br>- 1 fresh fish can be replaced by 2 dried fishes and vice versa.
            </p>
        </div>
    </div>
@endsection
