<?php

namespace App\Http\Controllers;

use App\Mail\CouponMailer;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Mail;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coupons.index', ['coupons' => Coupon::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create'); 
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
        'name'         => 'required', 
        'discount'     => 'required|numeric|min:1',
        'expired_at'   => 'required', 
       ]);

       $coupon = Coupon::create($request->except('_token') + ['created_at' => Carbon::now()]); 

       $users = User::where('role', 'user')->get(); 

       $name = $coupon->name; 
       $disc = $coupon->discount; 
       $exp  = $coupon->expired_at; 

       foreach($users as $user)
       {
          Mail::to($user->email)->send(new CouponMailer($name, $disc, $exp));
       }

       return redirect()->route('coupons.index')->withSuccess('Coupon added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
       return view('admin.coupons.edit', compact('coupon')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'name'         => 'required', 
            'discount'     => 'required|numeric|min:1',
            'expired_at'   => 'required', 
           ]);
    
           $coupon->update($request->except('_token') + ['updated_at' => Carbon::now()]); 
           return redirect()->route('coupons.index')->withSuccess('Coupon update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupons.index')->withSuccess('Coupon deleted');
    }
}
