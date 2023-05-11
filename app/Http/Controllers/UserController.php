<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Auth;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;
// use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{    
    /**
     * Construct
     */
    public function __construct(){

        $this->middleware('auth');
    }


    /**
     * User Dashboard
     */
    public function userDashboard(){

        // $orders = Order::where('user_id', Auth::user()->id)->where('payment_status', 'paid')->get();
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('frontend.userDashboard', compact('orders'));
    }

    /**
     * My Orders
     */
    public function myOrders(){
        
        
        $orders=Order::where('user_id',Auth::user()->id)->get();
        
        return view('frontend.myOrders', compact('orders'));
    }

     /**
     * Wishlist
     */
    public function wishList(){

        $wishlists = Wishlist::where('user_id', Auth::id())->get();

        return view('frontend.wishList', compact('wishlists'));
    }

    public function changepass(Request $request)
    {
        $request->validate([
            'old_password' => 'required', 
            'password'     => 'required|confirmed|min:6',
        ]);

       $old = $request->old_password; 
       
       if(Hash::check($old, Auth::user()->password))
       {
          $user = Auth::user(); 
          $user->password = bcrypt($request->password); 
          $user->save(); 
          return back()->withSuccess('Password successfully changed');
       }
       else
       {
           return back()->withOld('Old password do not match our records');
       }

    }


    // Message
    public function message(){    
        return view('frontend.message');
    }

    // Privacy Policy
    public function privacy_policy(){
        
        return view('frontend.privacy_policy');
    }

    // Privacy Policy
    public function terms_condition(){

        return view('frontend.terms_condition');
    }

}
