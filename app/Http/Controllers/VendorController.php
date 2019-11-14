<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index', [
            'vendors' => Vendor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.create');
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
    
        $vendor = new Vendor();
        $vendor->name = $validData['name'];
        $vendor->nit = $validData['nit'];
        $vendor->email = $validData['email'];
        $vendor->phone = $validData['phone'];
        $vendor->address = $validData['address'];
        $vendor->city = $validData['city'];
        $vendor->region = $validData['region'];
        $vendor->country = $validData['country'];
        $vendor->save();
    
        return redirect('/vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        return view('vendor.edit', [
            'vendor' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
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
    
        $vendor->name = $validData['name'];
        $vendor->nit = $validData['nit'];
        $vendor->email = $validData['email'];
        $vendor->phone = $validData['phone'];
        $vendor->address = $validData['address'];
        $vendor->city = $validData['city'];
        $vendor->region = $validData['region'];
        $vendor->country = $validData['country'];
        $vendor->save();
    
        return redirect('/vendors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return redirect('/vendors');
    }
    
    public function confirmDelete($id){
        $vendor = Vendor::find($id);
        return view('vendor.confirmDelete', [
            'vendor' =>$vendor
        ]);
    }
}
