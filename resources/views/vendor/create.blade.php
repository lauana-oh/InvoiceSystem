@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Create a new vendor</h1>
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
                <form action="/vendors" method="post">
                    @csrf
                    <label for="name">Full name OR Company Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Type company or person full name" value="{{ old("name") }}">
                    <label for="nit">NIT:</label>
                    <input type="number" class="form-control" name="nit"
                           id="nit" value="{{ old("nit") }}"
                           placeholder="Write NIT for this name">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="{{ old("iva") }}"
                           placeholder="vendor@email.com">
                    <label for="phone">Phone number:</label>
                    <input type="number" class="form-control" id="phone" name="phone"
                           value="{{old("phone")}}" placeholder="000 000 0000">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Type address"
                           value="{{old("address")}}">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Type city"
                           value="{{old("city")}}">
                    <label for="region">Region:</label>
                    <input type="text" class="form-control" name="region" id="region"
                           value="{{old("region")}}" placeholder="Type Region">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="Type country"
                           value="{{old("country")}}">
                    <button class="btn btn-primary form-control mt-2" type="submit">Submit</button>
                </form>
            </div>
            <div class="row pt-4">
                <a class="btn btn-secondary" href="/vendors">Back</a>
            </div>
        </div>
    </div>
@endsection
