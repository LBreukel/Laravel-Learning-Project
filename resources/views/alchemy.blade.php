@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Alchemy Items</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <div class="table100 ver5 m-b-110">

        @can('create alchemy')
            <a class="btn btn-primary" href="{{route('alchemy.create') }}">Create new item</a>
        @endcan

        <table class="table" data-vertable="ver5">
            <thead>
            <tr class="row100 head">
                <th>ID</th>
                <th>Name</th>
                <th>Attribute</th>
                <th scope="col">alchemy Details</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alchemy as $item)
                <tr class="row100">
                    <td>{{$item->id}}</td>
                    <td><a class="nav-link">{{$item->name}}</a></td>
                    <td>{{$item->attribute}}</td>
                    <td><a href="{{ route('alchemy.show', ['alchemy' => $item->id])}}">Details</a></td>
                </tr>
            @endforeach

            </tbody>

        </table>

    </div>

@endsection


