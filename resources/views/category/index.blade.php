@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Categories</h1>
            <div class="row">
                <a href="/categories/create">Create a new category</a>
            </div>
            <table class="table">
                @foreach($categories as $category)
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
