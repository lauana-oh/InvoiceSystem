@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Categories</h1>
            <div class="row">
                <a class="btn btn-primary m-2 mb-4" href="/categories/create">Create a new category</a>
            </div>
            <div class="row">
                <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>IVA</th>
                            <th></th>
                        </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->iva}}</td>
                            <td><a href="/categories/{{$category->id}}/edit">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
