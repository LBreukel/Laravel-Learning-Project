@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Editing Cooking-Item</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('edit cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{route('cooking.index') }}">Back</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="{{route('cooking.delete',
                                            ['cooking'=>$cooking->id]) }}">Delete</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Edit the fields which need change
            </div>
            <div class="card-body">
                <form action="{{ route('cooking.update', $cooking) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="{{ $cooking->name }}"
                               autocomplete="off" value="{{ $cooking->name }}">
                    </div>
                    <div class="form-group">
                        <label for="Attribute">Attribute</label>
                        <textarea class="form-control" id="attribute" name="attribute"
                                  placeholder="{{ $cooking->attribute }}" autocomplete="off" cols="50"
                                  rows="10">{{ $cooking->attribute }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" id="category" name="category" type="text"
                               placeholder="{{ $cooking->category }}"
                               autocomplete="off" value="{{ $cooking->category }}">
                    </div>
                    <div class="form-group">
                        <label for="Guide Number">Guide Number</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="{{ $cooking->guidenumber }}" autocomplete="off"
                               value="{{ $cooking->guidenumber }}">
                    </div>
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" id="type_id" name="type_id" type="text"
                               placeholder="{{ $cooking->type_id }}" autocomplete="off" value="{{ $cooking->type_id }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    @endcan
@endsection
