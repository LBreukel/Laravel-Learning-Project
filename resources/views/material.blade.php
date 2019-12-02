@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Materials</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <nav class="nav">
        <ul class="nav nav-tabs">
            @can('create gear')
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{ route('materials.create') }}">Create new Item</a>
                </li>
            @endcan
        </ul>
    </nav>

    <div class="table100 ver5 m-b-110">
        <table data-vertable="ver5">
            <thead>
            <tr class="row100 head">
                <th class="column100 column2" data-column="column2">ID</th>
                <th class="column100 column3" data-column="column3">Name</th>
                <th class="column100 column6" data-colomn="column6">Details</th>
            </tr>
            </thead>
            <tbody>

            @foreach($materials as $material)


                <tr class="row100">
                    <td class="column100 column2" data-column="column2">{{ $material->id }}</td>
                    <td class="column100 column3" data-column="column3">{{ $material->name }}</td>
                    <td class="column100 column6" data-column="column6"><a href="{{ route('materials.show',
                ['material' => $material->id]) }}">Details</a></td>
                </tr>
            @endforeach




            </tbody>
        </table>
    </div>


@endsection