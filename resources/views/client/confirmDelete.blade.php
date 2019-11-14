@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete {{$client->name}}?</h1>
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
                    <li><strong>NIT:</strong>{{$client->nit}}</li>
                    <li><strong>Name:</strong> {{$client->name}}</li>
                    <li><strong>E-mail:</strong> {{$client->email}}</li>
                    <li><strong>Phone number:</strong>{{$client->phone}}</li>
                    <li><strong>Address:</strong>{{$client->address}} - {{$client->city}} -
                        {{$client->region}} - {{$client->country}}</li>
                </ul>
            </div>
            <div class="row ">
                <form action="/clients/{{$client->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary m-2" type="submit">Delete</button>
                </form>
                <a class="btn btn-secondary m-2" href="/clients/">Back</a>
            </div>
        </div>
    </div>
@endsection
