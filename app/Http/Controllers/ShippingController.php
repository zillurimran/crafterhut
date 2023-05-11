<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;
use Auth;

class ShippingController extends Controller
{
    // Constructor 

        public function __construct()
        {
            $this->middleware('auth');
            // $this->middleware('verified');
            $this->middleware('checkAdmin');
        }

        public function index()
        {   
        if(permissionCheck(Auth::id(),'ShippingParameteres'))
        {
            return view('admin.shipping.index', ['shippings' => Shipping::orderBy('city', 'asc')->get()]); 
        }else{
            return abort('403');
        }

           
        }

        public function store(Request $request)
        {
            $request->validate([
                'city' => 'required|string|max:255',
                'cost' => 'required|numeric',
            ]);

            Shipping::create($request->except('_token') + ['created_at' => now()]);
            return back()->with('success', 'Shipping method added successfully');

            // if(Shipping::all()->count() > 0)
            // {
                // return back()->withSuccess('Shipping method added successfully');
            // }
        }

        public function update(Request $request)
        {
          
            $request->validate([
                'city' => 'required', 
                'cost' => 'required|numeric',
            ]);
            Shipping::find($request->id)->update($request->except(['_token', 'id']) + ['updated_at' => now()]);

            return back()->withSuccess('Shipping method updated successfully');

        }

        public function destroy($id)
        {
            Shipping::find($id)->delete();

            return back()->withSuccess('Shipping method deleted successfully');
        }
}
