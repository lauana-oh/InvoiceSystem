@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Clients</h1>
            <div class="row">
                <a class="btn btn-primary m-2 mb-4" href="/clients/create">Create a new client</a>
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
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->name}}</td>
                            <td>{{$client->nit}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phone}}</td>
                            <td align="char">{{$client->address}} - {{$client->city}} - {{$client->region}} -
                                {{$client->country}} </td>
                            <td><a href="/clients/{{$client->id}}/edit">Edit</a></td>
                            <td><a href="/clients/{{$client->id}}/confirmDelete">Delete</a> </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
