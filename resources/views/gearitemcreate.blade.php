@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Create Gearitem</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('create gear')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('gearitems.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Fill in the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('gearitems.index') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                               autocomplete="off"
                               value="">
                    </div>
                    <div class="form-group">
                        <label for="gearstats">Gearstats</label>
                        <textarea class="form-control" id="gearstats" name="gearstats" placeholder="Gearstats"
                                  autocomplete="off" cols="50" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input class="form-control" id="category" name="category" type="text" placeholder="Category"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="gearset">Gearset</label>
                        <input class="form-control" id="gearset" name="gearset" type="text" placeholder="Gearset"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="attribute">Attribute</label>
                        <input class="form-control" id="attribute" name="attribute" type="text" placeholder="Attribute"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="Guidenumber">Guidenumber</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="Guidenumber"
                               autocomplete="off" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    @endcan

@endsection

