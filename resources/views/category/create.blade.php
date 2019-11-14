@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Create a new category</h1>
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
                <form action="/categories" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Type a new category">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description"
                               id="description" placeholder="Describe this new category...">
                        <label for="iva">I.v.a.</label>
                        <input type="number" class="form-control" id="iva" name="iva" step="0.001"
                               placeholder="Type the corresponded iva of this category">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
            <div class="row pt-4">
                <a class="btn btn-secondary" href="/categories/">Back</a>
            </div>
        </div>
    </div>
@endsection
