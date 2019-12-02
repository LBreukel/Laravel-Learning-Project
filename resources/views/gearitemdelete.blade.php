@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Delete Gearitem</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('delete gear')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('gearitems.index') }}">Back</a>
                </li>
                <li>
                @can('destroy gear')
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('gearitems.delete',
                 ['gearitem' => $gearitem->id]) }}">Delete Gearitem</a>
                        @endcan
                    </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                You're about to delete something
            </div>
            <div class="card-body">
                <form action="{{ route('gearitems.destroy', $gearitem) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                               placeholder="{{ $gearitem->name }}" autocomplete="off" value="{{ $gearitem->name }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="gearstats">Gearstats</label>
                        <input class="form-control" id="gearstats" name="gearstats" type="text"
                               placeholder="{{ $gearitem->gearstats }}" autocomplete="off"
                               value="{{ $gearitem->gearstats }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input class="form-control" id="category" name="category" type="text"
                               placeholder="{{ $gearitem->category }}" autocomplete="off"
                               value="{{ $gearitem->category }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="gearset">Gearset</label>
                        <input class="form-control" id="gearset" name="gearset" type="text"
                               placeholder="{{ $gearitem->gearset }}" autocomplete="off"
                               value="{{ $gearitem->gearset }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="attribute">Attribute</label>
                        <input class="form-control" id="attribute" name="attribute" type="text"
                               placeholder="{{ $gearitem->attribute }}" autocomplete="off"
                               value="{{ $gearitem->attribute }}"
                               disabled>
                    </div>
                    <div class="form-group">
                        <label for="Guidenumber">Guidenumber</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="{{ $gearitem->guidenumber }}" autocomplete="off"
                               value="{{ $gearitem->guidenumber }}" disabled>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endcan
@endsection
