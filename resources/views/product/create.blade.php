@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Add a new product</h1>
            <div class="row">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="row">
                <form action="/products" method="post">
                    @csrf
                    <label for="name">Product name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Type company or person full name" value="{{ old("name") }}">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description"
                           id="description" value="{{ old("description") }}"
                           placeholder="Describe your product">
                    <label for="unit_price">Unit price:</label>
                    <input type="number" class="form-control" id="unit_price" name="unit_price"
                           value="{{ old("unit_price") }}" step="0.01"
                           placeholder="$ 00.00">
                    <label for="stock">Units in stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock"
                           value="{{old("stock")}}" placeholder="000">
                    <button class="btn btn-primary form-control mt-2" type="submit">Submit</button>:
                </form>
            </div>
            <div class="row pt-4">
                <a class="btn btn-secondary" href="/products">Back</a>
            </div>
        </div>
    </div>
@endsection
