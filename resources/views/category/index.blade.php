@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Categories</h1>
            <div class="row">
                <a class="btn btn-primary" href="/categories/create">Create a new category</a>
            </div>
            <div class="row">
                <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>IVA</th>
                        </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->iva}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
