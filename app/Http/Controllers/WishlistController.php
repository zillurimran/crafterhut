<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class WishlistController extends Controller
{

    /**
     * Construct
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=Wishlist::where('product_id',$request->product_id)->where('user_id',Auth::user()->id)->first();
        
         if($data){
            // return back()->with('error','Alredy Exist in Wishlist');
            return redirect()->route('frontend.wishList', Auth::id())->withSuccess('You Already Added this Item ');
         }
         else{
            $wishlist = Wishlist::create([
                'user_id'    => Auth::id(),
                'product_id' => $request->product_id,
                'created_at' => Carbon::now(),
            ]);

         }
         
       // Return Back to List With Success Message
       return redirect()->route('frontend.wishList', Auth::id())->withSuccess('Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        $wishlist_delete = Wishlist::find($wishlist)->first();

        $wishlist_delete->delete();

        return back()->withSuccess('Deleted Successfully');

    }

}
