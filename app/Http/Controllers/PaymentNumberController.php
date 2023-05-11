<?php

namespace App\Http\Controllers;

use App\Models\PaymentNumber;
use Illuminate\Http\Request;
use Auth;

class PaymentNumberController extends Controller
{
    public function index(){
        if(permissionCheck(Auth::id(),'PaymentNumbers'))
        {
             return view('admin.paymentNumbers.index',['number'=>PaymentNumber::first()]);
        }else{
            return abort('403');
        }
       
    }

    public function updateNumber(Request $request, $id){
        $number = PaymentNumber::find($id);
        $number->bkash = $request->bkash;
        $number->nagad = $request->nagad;
        $number->rocket = $request->rocket;
        $number->save();
        return back()->withSuccess('Numbers updated');
    }
}
