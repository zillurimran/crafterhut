<?php

namespace App\Http\Controllers;

use App\Models\PickupAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class PickupAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(permissionCheck(Auth::id(),'CollectionAddress'))
        {
            return view('admin.pickups.index', [
                'pickupAddresses' => PickupAddress::all(),
            ]);
        }else{
            return abort('403');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'address'       => 'required',
         ]);
        //  dd($request->all());

         PickupAddress::create([
            'address'       => $request->address, 
            'opening_hour' => Carbon::parse($request->opening_hour)->format('H:i'),
            'closing_hour' => Carbon::parse($request->closing_hour)->format('H:i'),
         ]);

         return back()->withSuccess('Address Registered');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function show(PickupAddress $pickupAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(PickupAddress $pickupAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PickupAddress $pickupAddress)
    {
        $request->validate([
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'address'       => 'required',
         ]);
        //  dd($request->all());
         $pickup = PickupAddress::find($request->id);
         
         $pickup->address = $request->address;
         $pickup->opening_hour = Carbon::parse($request->opening_hour)->format('H:i');
         $pickup->closing_hour = Carbon::parse($request->closing_hour)->format('H:i');
         $pickup->save();

         return back()->withSuccess('Address Registered');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PickupAddress  $pickupAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(PickupAddress $pickupAddress, Request $request)
    {
        $data = PickupAddress::find($request->id); 
        $data->delete();
        return back()->withSuccess('Address deleted');

    }
}
