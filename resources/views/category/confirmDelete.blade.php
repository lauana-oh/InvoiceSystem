@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete {{$category->name}} Category?</h1>
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
                <ul>
                    <li><strong>ID:</strong>{{$category->id}}</li>
                    <li><strong>Category:</strong> {{$category->name}}</li>
                    <li><strong>Description:</strong> {{$category->description}}</li>
                    <li><strong>Iva:</strong>{{$category->iva}}%</li>
                </ul>
            </div>
            <div class="row ">
                <form action="/categories/{{$category->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary m-2" type="submit">Delete</button>
                </form>
                <a class="btn btn-secondary m-2" href="/categories/">Back</a>
            </div>
        </div>
    </div>
@endsection
