@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Cooking Items</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <div class="table100 ver5 m-b-110">
        <nav class="nav">
            <ul class="nav nav-tabs">
                @can('create cooking')
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{route('cooking.create') }}">Create new item</a>
                    </li>
                @endcan
            </ul>
        </nav>
        <table data-vertable="ver5">
            <thead>
            <tr class="row100 head">
                <th class="column100 column1">#</th>
                <th class="column100 column1">Name</th>
                <th class="column100 column1">Attribute</th>
                <th scope="col">Cooking Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cooking as $item)
                <tr class="row100">
                    <td class="column100 column1">{{$item->id}}</td>
                    <td class="column100 column1"><a class="nav-link">{{$item->name}}</a></td>
                    <td class="column100 column1">{{$item->attribute}}</td>
                    <td class="column100 column1"><a href="{{ route('cooking.show', ['cooking' => $item->id])}}">Details</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


