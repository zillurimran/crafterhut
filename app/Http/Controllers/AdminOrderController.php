<?php

namespace App\Http\Controllers;

use App\Mail\OrderCancelMail;
use App\Mail\OrderConfirmMail;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
    public function index()
    {   
        if(permissionCheck(Auth::id(), 'MyOrders'))
        {
            return view('admin.order.index', ['orders' => Order::latest()->get()]);
        }else{
            return abort('403');
        }
       
    }

    public function completed($id)
    {
        
        $data = Order::find($id);

        Mail::to($data->email)->send(new OrderConfirmMail());
        $data->status = 'completed';
        $data->payment_status='paid'; 
        $data->save(); 
        return back()->withSuccess('Order Marked as complete');
    }
    public function cancelled($id)
    {
        $data = Order::find($id);
        Mail::to($data->email)->send(new OrderCancelMail());
        $data->status = 'cancelled'; 
        $data->save(); 
        return back()->withSuccess('Order Marked as cancelled');
    }
}
