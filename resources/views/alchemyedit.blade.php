@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Edit Alchemy-Item</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('edit alchemy')

        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{route('alchemy.index') }}">Back</a>
                </li>
                <li>
                    <a class="btn btn-primary" href="{{route('alchemy.show', ['alchemy'=>$alchemy->id]) }}">Show</a>
                </li>
            </ul>
        </nav>

        <div class="card">

            <div class="card-header">
                Edit the fields which need change
            </div>

            <div class="card-body">

                <form action="{{ route('alchemy.update', $alchemy) }}" method="POST">

                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" id="name" name="name" type="text"
                               placeholder="{{ $alchemy->name }}" autocomplete="off"
                               value="{{ $alchemy->name }}">
                    </div>

                    <div class="form-group">
                        <label for="Attribute">Attribute</label>
                        <textarea class="form-control" id="attribute" name="attribute"
                                  placeholder="{{ $alchemy->attribute }}" autocomplete="off" cols="50"
                                  rows="10">{{ $alchemy->attribute }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" id="category" name="category" type="text"
                               placeholder="{{ $alchemy->category }}" autocomplete="off"
                               value="{{ $alchemy->category }}">
                    </div>

                    <div class="form-group">
                        <label for="Guide Number">Guide Number</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="{{ $alchemy->guidenumber }}" autocomplete="off"
                               value="{{ $alchemy->guidenumber }}">
                    </div>

                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" id="type_id" name="type_id" type="text"
                               placeholder="{{ $alchemy->type_id }}" autocomplete="off"
                               value="{{ $alchemy->type_id }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>

            </div>

        </div>

        </div>
    @endcan
@endsection
