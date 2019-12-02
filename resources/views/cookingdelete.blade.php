@extends('layout.layout')

@section('content')

    <h1 class="cooking-title">Deleting Cooking-Item</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('delete cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{route('cooking.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
               You're about to delete something
            </div>
            <div class="card-body">
                <form action="{{ route('cooking.destroy', $cooking) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="{{ $cooking->name }}"
                               autocomplete="off" value="{{ $cooking->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Attribute">Attribute</label>
                        <textarea class="form-control" id="attribute" name="attribute"
                                  placeholder="{{ $cooking->attribute }}" autocomplete="off" cols="50"
                                  rows="10" disabled>{{ $cooking->attribute }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" id="category" name="category" type="text"
                               placeholder="{{ $cooking->category }}"
                               autocomplete="off" value="{{ $cooking->category }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Guide Number">Guide Number</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="{{ $cooking->guidenumber }}" autocomplete="off"
                               value="{{ $cooking->guidenumber }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" id="type_id" name="type_id" type="text"
                               placeholder="{{ $cooking->type_id }}" autocomplete="off" value="{{ $cooking->type_id }}"
                               disabled>
                    </div>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    @endcan
@endsection
