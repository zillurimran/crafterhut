<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\AdminSuccessMail;
use App\Mail\CustomerMail;
use App\Mail\CustomerSuccessMail;
use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Mail;
use Session;

class OrderController extends Controller
{
    public function store(Request $request)
    {      
        // dd($request->all());
        // $user = Auth::id();
        // dd($user);
        
        
        $order = Order::create([
            'user_id'               => Auth::id(),
            'name'                  => $request->name,
            'email'                 => $request->email,
            'phone'                 => $request->phone,
            'order_total'           => cartTotal(),
            'total_payable'         => $request->total,
            'payment_status'        => 'not paid',
            'address'               => $request->address,
            'address_two'           => $request->address_2 ?? 'N/A',
            'country'               => $request->country,
            'state'                 => $request->state,
            'zip'                   => $request->zip,
            'payment_method'        => $request->paymentMethod,
            'order_type'            => $request->order_type,
            'pickup_address_id'     => $request->pickup_address ?? null,
            'pickup_date'           => $request->pickup_date ?? null,
            'pickup_time'           => $request->pickup_time ?? null,            
            'customer_number'       => $request->customer_number,
            'transaction_number'    => $request->transaction_number,
            'paid_amount'           => $request->paid_amount,
        ]);
   



        // dd($request->all());
        
        // $total_cost = cartTotal() + $request->shipping_cost;
        // dd($total_cost);
    
        // $order = Order::create([
        //     'user_id'        => Auth::id(), 
        //     'name'           => $request->name, 
        //     'email'          => $request->email,
        //     'phone'          => $request->phone,
        //     // 'order_total'    => $total_cost, 
        //     'order_total'    => cartTotal(), 
        //     // 'total_payable'  => $total_cost, 
        //     'total_payable'  => $total_cost, 
        //     'payment_status' => 'not paid', 
        //     'address'        => $request->address ?? 'N/A', 
        //     'address_two'    => $request->address_two ?? $request->address ?? 'N/A' , 
        //     'country'        => $request->country ?? 'N/A', 
        //     'state'          => $request->state ?? 'N/A', 
        //     'zip'            => $request->zip ?? 'N/A', 
        //     'payment_method' => 'Cash on delivery',  // Initially payment method has cash on delivery system
        //     'order_type'     => $request->order_type,
        //     'pickup_address_id' => $request->pickup_address,
        //     'pickup_date'    => $request->pickup_date,
        //     'pickup_time'    => $request->pickup_time,

        // ]);

        // Mail::to($request->email)->send(new OrderMail(cartTotal(), $request->address ,$request->shipping_cost));
        
        // $admin=User::where('role','admin')->first(); 
        // $email=$admin->email;
        // $name=$admin->name;
        // $subject ='Getting in touch! A New order has been received';

        // Mail::to( generalsettings()->email)->send(new AdminMail($name, $subject,'null'));
       
        $shipping = Shipping::first();
        if(cartTotal() < $shipping->city)
        {
            $total = cartTotal() + $shipping->cost;
        }
        else 
        {
            $total = cartTotal();
        }
        $order->update([
            'payment_status' => 'not paid', 
             'payment_method' => $request->paymentMethod,
             'total_payable' => $request->total,
         ]);
         foreach(cartItems() as $item)
         {
             
             $product  = Product::find($item->product_id); 

             if($product->qty)
             {
                 $quantity = $product->qty - $item->qty;
             }
             else
             {
                 $quantity = 0;
             }

             $product->qty =  $quantity;

             $product->save();

             OrderDetail::create([
                 'prod_id'  => $item->product_id, 
                 'order_id' => $order->id, 
                 'qty'      => $item->qty, 
                 'price'    => $item->amount, 
             ]);

             Cart::find($item->id)->delete();
         }

        // Mail::to($request->email)->send(new OrderMail(cartTotal(), $request->address ,$request->shipping_cost));
        
        // echo   $order->id;
        return response()->json([
            'status' => "success"
        ]);

        
    }
     
   public function capturePayment(Request $request)
   {

        
        // Order::create([
        //     'user_id'        => Auth::id(), 
        //     'name'           => $request->name, 
        //     'order_total'    => cartTotal(), 
        //     'address'        => $request->address, 
        //     'address_two'        => $request->address_two, 
        //     'country'        => $request->country, 
        //     'state'        => $request->state, 
        //     'zip'        => $request->zip, 
        //     'total_payable'        => cartTotal(), 
        //     'payment_status'  => 'cash on delivery',

        // ]);
        // return $order;
   }

   public function success()
   {
    return redirect('message')->withSuccess('Your order was successfull.');
   }
   
//    public function success()
//    {
//            $order = Order::latest()->first();
//            $order = Order::latest()->first();
//            $shipping = Shipping::first();

//            if(cartTotal() < $shipping->city)
//            {
//                $total = cartTotal() + $shipping->cost;
//            }
//            else 
//            {
//                $total = cartTotal();
//            }
//            $order->update([
//                 // 'payment_status' => 'not paid', 
//                 'payment_status' => 'paid', 
//                 'payment_method' => 'online transaction',
//                 'total_payable' => $total,
//             ]);
//             foreach(cartItems() as $item)
//             {
                
//                 $product  = Product::find($item->product_id); 


//                 if($product->qty)
//                 {
//                     $quantity = $product->qty - $item->qty;
//                 }
//                 else
//                 {
//                     $quantity = 0;
//                 }

//                 $product->qty =  $quantity;

//                 $product->save();

//                 OrderDetail::create([
//                     'prod_id'  => $item->product_id, 
//                     'order_id' => $order->id, 
//                     'qty'      => $item->qty, 
//                     'price'    => $item->amount, 
//                 ]);

//                 Cart::find($item->id)->delete();
//             }

//             // Send Mail To Customer
//             $user = User::find(Auth::id());
//             $data = Order::find($order->id);

//             $name    = $user->name;
//             $mail    = $user->email;
//             $subject = 'Your Order was successfull.Thank you for your Order';
//             $title    = '';
//             $description = '';

//             // Mail::to($mail)->send(new CustomerSuccessMail($name, $mail, $subject, $title, $description, $data));

//             // Send Mail To Admin
//             $admin = User::where('role', 'admin')->first();

//             $admin_name    = $admin->name;
//             $admin_mail    = $admin->email;
//             $admin_subject = 'Payment was successfull.';
//             $admin_title    = '';
//             $admin_description = '';

//             Mail::to($admin_mail)->send(new AdminSuccessMail($admin_name, $admin_mail, $admin_subject, $admin_title, $admin_description));


//             return redirect('message')->withSuccess('Your payment was successfull.');
          
            
//    }

   public function failed()
   {
            $order = Order::latest()->first();
            $shipping = Shipping::first();
            if(cartTotal() < $shipping->city)
            {
                $total = cartTotal() + $shipping->cost;
            }
            else 
            {
                $total = cartTotal();
            }
            $order->update([
                'payment_status' => 'not paid', 
                'payment_method' => 'online transaction',
                'total_payable' => $total,
            ]);

            $download = 'downloadcheker' ;    

            $user = User::find(Auth::id()); 
            $data = Order::find($order->id);

            $name    = $user->name;
            $mail    = Auth::user()->email;
            $subject = 'Your payment was rejected.Please try again';
            $title    = '';
            $description = '';

            Mail::to($mail)->send(new CustomerMail($name, $mail, $subject, $title, $description, $data, $download));

            // Send Mail To Admin
            $admin = User::where('role', 'admin')->first();

            $admin_name    = $admin->name;
            $admin_mail    = $admin->email;
            $admin_subject = 'Payment was rejected.';
            $admin_title    = '';
            $admin_description = '';

            Mail::to($admin_mail)->send(new AdminMail($admin_name, $admin_mail, $admin_subject, $admin_title, $admin_description));

            return redirect('message')->withWarning('Sorry we could not process your order at this time');
   }


}