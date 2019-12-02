@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Gear Items</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            @can('create gear')
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('gearitems.create') }}">Create new Item</a>
                </li>
            @endcan
        </ul>
    </nav>

    <div class="table100 ver5 m-b-110">
        <table data-vertable="ver5">
            <thead>
            <tr class="row100 head">
                <th class="column100 column1" data-column="column1">ID</th>
                <th class="column100 column2" data-column="column2">Name</th>
                <th class="column100 column3" data-column="column3">Category</th>
                <th class="column100 column4" data-column="column4">Gearset</th>
                <th class="column100 column5" data-column="column5">Attribute</th>
                <th class="column100 column6" data-column="column6">Guidenumber</th>
                <th class="column100 column6" data-colomn="column6">Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($gearitems as $gearitems)


                <tr class="row100">
                    <td class="column100 column1" data-column="column1">{{ $gearitems->id }}</td>
                    <td class="column100 column2" data-column="column2">{{ $gearitems->name }}</td>
                    <td class="column100 column3" data-column="column3">{{ $gearitems->category }}</td>
                    <td class="column100 column4" data-column="column4">{{ $gearitems->gearset }}</td>
                    <td class="column100 column5" data-column="column5">{{ $gearitems->attribute }}</td>
                    <td class="column100 column6" data-column="column6">{{ $gearitems->guidenumber }}</td>
                    <td class="column100 column6" data-column="column6"><a href="{{ route('gearitems.show',
                ['gearitem' => $gearitems->id]) }}">Details</a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>


@endsection