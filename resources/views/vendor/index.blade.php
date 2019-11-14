@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Vendors</h1>
            <div class="row">
                <a class="btn btn-primary m-2 mb-4" href="/vendors/create">Create a new vendor</a>
            </div>
            <div class="row">
                <table class="table">
                        <tr>
                            <th>Full Name or Company Name</th>
                            <th>NIT</th>
                            <th>E-mail</th>
                            <th>Phone number</th>
                            <th>Adress</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach($vendors as $vendor)
                        <tr>
                            <td>{{$vendor->name}}</td>
                            <td>{{$vendor->nit}}</td>
                            <td>{{$vendor->email}}</td>
                            <td>{{$vendor->phone}}</td>
                            <td align="char">{{$vendor->address}} - {{$vendor->city}} - {{$vendor->region}} -
                                {{$vendor->country}} </td>
                            <td><a href="/vendors/{{$vendor->id}}/edit">Edit</a></td>
                            <td><a href="/vendors/{{$vendor->id}}/confirmDelete">Delete</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
