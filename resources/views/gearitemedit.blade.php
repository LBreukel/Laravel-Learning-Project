@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Edit Gearitem</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('edit gear')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('gearitems.index') }}">Back</a>
                </li>

                <li>
                @can('edit gear')
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('gearitems.delete',
                 ['gearitem' => $gearitem->id]) }}">Delete</a>
                        @endcan
                    </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Fill in the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('gearitems.update', $gearitem) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                               placeholder="{{ $gearitem->name }}" autocomplete="off" value="{{ $gearitem->name }}">
                    </div>
                    <div class="form-group">
                        <label for="gearstats">Gearstats</label>
                        <input class="form-control" id="gearstats" name="gearstats" type="text" placeholder="Gearstats"
                               autocomplete="off" value="{{ $gearitem->gearstats }}">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input class="form-control" id="category" name="category" type="text" placeholder="Category"
                               autocomplete="off" value="{{ $gearitem->category }}">
                    </div>
                    <div class="form-group">
                        <label for="gearset">Gearset</label>
                        <input class="form-control" id="gearset" name="gearset" type="text" placeholder="Gearset"
                               autocomplete="off" value="{{ $gearitem->gearset }}">
                    </div>
                    <div class="form-group">
                        <label for="attribute">Attribute</label>
                        <input class="form-control" id="attribute" name="attribute" type="text" placeholder="Attribute"
                               autocomplete="off" value="{{ $gearitem->attribute }}">
                    </div>
                    <div class="form-group">
                        <label for="Guidenumber">Guidenumber</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="Guidenumber"
                               autocomplete="off" value="{{ $gearitem->guidenumber }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    @endcan
@endsection

