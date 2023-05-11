<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Carbon\Carbon;

class CustomLoginController extends Controller
{
    /**
     *  Custom Login 
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required',
        ]);

       $user = User::where('email', $request->email)->first(); 

       $db_password = $user->password; 
       $client_password = $request->password;  

       if(Hash::check($client_password, $db_password))
       {
           Auth::login($user); 
       }
       else 
       {
           $db_error = 'Incorrect Password !!!'; 
           return response()->json(['dbError' => $db_error]);
       }
    }

    /**
     *  Custom Registration  
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'  => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required',
        ]);

       $user = User::create([
        'name'       => $request->name, 
        'email'      => $request->email,
        'password'   => bcrypt($request->password),  
        // Hash::make($request->password) 
        'created_at' => Carbon::now(),
       ]);

       Auth::login($user);
    }

// END    
}
