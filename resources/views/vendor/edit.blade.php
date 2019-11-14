@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit {{$vendor->name}}</h1>
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
                <form action="/vendors/{{$vendor->id}}" method="post">
                    @csrf
                    @method('put')
                        <label for="name">Full name OR Company Name:</label>
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Type company or person full name" value="{{ old("name", $vendor->name) }}">
                        <label for="nit">NIT:</label>
                        <input type="number" class="form-control" name="nit"
                               id="nit" value="{{ old("nit", $vendor->nit) }}"
                               placeholder="Write NIT for this name">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ old("iva", $vendor->email) }}"
                               placeholder="vendor@email.com">
                        <label for="phone">Phone number:</label>
                        <input type="number" class="form-control" id="phone" name="phone"
                               value="{{old("phone",$vendor->phone)}}" placeholder="000 000 0000">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Type address"
                               value="{{old("address",$vendor->address)}}">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Type city"
                               value="{{old("city",$vendor->city)}}">
                        <label for="region">Region:</label>
                        <input type="text" class="form-control" name="region" id="region"
                               value="{{old("region",$vendor->region)}}" placeholder="Type Region">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Type country"
                               value="{{old("country,$vendor->country")}}">
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
                <div class="row">
                <a class="btn btn-secondary m-3" href="/vendors/">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
