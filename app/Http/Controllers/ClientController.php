<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index', [
            'clients' => Client::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required | min:3',
            'nit' => 'required | numeric | min:5',
            'email' => 'email',
            'phone' => 'min:7',
            'address' => 'max:255',
            'city' => 'max:255',
            'region' => 'max:255',
            'country' => 'max:255',
        ]);
        
        $client = new Client();
        $client->name = $validData['name'];
        $client->nit = $validData['nit'];
        $client->email = $validData['email'];
        $client->phone = $validData['phone'];
        $client->address = $validData['address'];
        $client->city = $validData['city'];
        $client->region = $validData['region'];
        $client->country = $validData['country'];
        $client->save();
        
        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validData = $request->validate([
            'name' => 'required | min:3',
            'nit' => 'required | numeric | min:5',
            'email' => 'email',
            'phone' => 'min:7',
            'address' => 'max:255',
            'city' => 'max:255',
            'region' => 'max:255',
            'country' => 'max:255',
        ]);
    
        $client->name = $validData['name'];
        $client->nit = $validData['nit'];
        $client->email = $validData['email'];
        $client->phone = $validData['phone'];
        $client->address = $validData['address'];
        $client->city = $validData['city'];
        $client->region = $validData['region'];
        $client->country = $validData['country'];
        $client->save();
    
        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
