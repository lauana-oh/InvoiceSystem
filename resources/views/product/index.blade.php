@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Products</h1>
            <div class="row">
                <a class="btn btn-primary m-2 mb-4" href="/products/create">Add a new product</a>
            </div>
            <div class="row">
                <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Unit Price</th>
                            <th>Quantity in stock</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->unit_price}}</td>
                            <td>{{$product->stock}} </td>
                            <td>{{$product->category_id}}</td>
                            <td><a href="/clients/{{$product->id}}/edit">Edit</a></td>
                            <td><a href="/clients/{{$product->id}}/confirmDelete">Delete</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
