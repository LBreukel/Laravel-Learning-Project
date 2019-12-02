@extends('layout.layout')

@section('content')

    <h1 class="boss-title">Error</h1>

    <div class="alert alert-danger">
        {{$exception->getMessage() }}
    </div>
@endsection