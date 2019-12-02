@extends('layout.layout')

@section('content')

    <h1 class="cooking-title2">Create New Cooking Item</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @can('create cooking')
        <nav class="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{route('cooking.index') }}">Back</a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">
                Fill in the needed information
            </div>
            <div class="card-body">
                <form action="{{ route('cooking.index') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Item Name"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="Attribute">Attribute</label>
                        <textarea class="form-control" id="attribute" name="attribute"
                                  placeholder="Fill in the attributes of this item: attribute1, attribute2, attribute 3 etc.."
                                  autocomplete="off" cols="50"
                                  rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input class="form-control" id="category" name="category" type="text" placeholder="Category"
                               autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="Guide Number">Guide Number</label>
                        <input class="form-control" id="guidenumber" name="guidenumber" type="text"
                               placeholder="Guide Number" autocomplete="off" value="">
                    </div>
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" id="type_id" name="type_id" type="text"
                               placeholder="For Cooking it needs to be 1" autocomplete="off" value="1" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    @endcan
@endsection