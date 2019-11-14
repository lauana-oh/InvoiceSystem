@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete {{$vendor->name}}?</h1>
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
                    <li><strong>NIT:</strong>{{$vendor->nit}}</li>
                    <li><strong>Name:</strong> {{$vendor->name}}</li>
                    <li><strong>E-mail:</strong> {{$vendor->email}}</li>
                    <li><strong>Phone number:</strong>{{$vendor->phone}}</li>
                    <li><strong>Address:</strong>{{$vendor->address}} - {{$vendor->city}} -
                        {{$vendor->region}} - {{$vendor->country}}</li>
                </ul>
            </div>
            <div class="row ">
                <form action="/vendors/{{$vendor->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary m-2" type="submit">Delete</button>
                </form>
                <a class="btn btn-secondary m-2" href="/vendors/">Back</a>
            </div>
        </div>
    </div>
@endsection
