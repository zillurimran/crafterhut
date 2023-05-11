<?php

namespace App\Http\Controllers;

use Auth;
use DateTime;
use Carbon\Carbon;
use App\Models\Order; 
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use DansMaCulotte\Monetico\Monetico;
use Illuminate\Support\Facades\Http;
use DansMaCulotte\Monetico\Receipts\PurchaseReceipt;
use DansMaCulotte\Monetico\Requests\PurchaseRequest;
use DansMaCulotte\Monetico\Resources\ClientResource;
use DansMaCulotte\Monetico\Responses\PurchaseResponse;
use DansMaCulotte\Monetico\Resources\BillingAddressResource;
use DansMaCulotte\Monetico\Resources\ShippingAddressResource;
use Illuminate\Support\Facades\Date;

class CheckoutController extends Controller
{
    /**
     *  Constructor
     */
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     *  Checkout Page 
     */
    public function index()
    {   
        // if(cartTotal() > 0)
        // {
        //     return view('frontend.checkout.index', ['shipping' => Shipping::latest()->first()]);
        // }
        // else
        // {
        //     return back()->withSuccess('You have no items on cart');
        // }
            // dd(Shipping::all());
        return view('frontend.checkout.index', ['shipping' => Shipping::all()]);
        
    }


//     public function index()
//     {
//         $shipping = Shipping::latest()->first();
//         if(cartTotal() > 0)
//         {
//             $monetico = new Monetico(
//                 '2970902',
//                 '1D2B2694F75EC978B508D6AD2DA3F9D34E9BDF95',// we u find this 
//                 'zefruit'
//             );//try now
//             $purchase = new PurchaseRequest([
//                 'reference' => time(),
//                 'description' => 'Documentation',
//                 'language' => 'FR',
//                 'email' => 'john@snow.stark',
//                 'amount' => 42,
//                 'currency' => 'EUR',
//                 'dateTime' => new DateTime(),//try to push now
            
//                 'successUrl' => 'https://zefruit.com/thanks',
//                 'errorUrl' => 'https://zefruit.com/oops', // you tried on the orginal domain  ? yes i did on original the error is something like this 
//                 // the code isn't live now  i removed after it wasnt working should i push?yes 
//             ]);
//             $billingAddress = new BillingAddressResource([
//                 'name' => 'dans ma culotte',
//                 'addressLine1' => '42 rue des serviettes',
//                 'city' => 'Coupeville',
//                 'postalCode' => '42000',
//                 'country' => 'FR',
//             ]);
//             $purchase->setBillingAddress($billingAddress);
            
//             $shippingAddress = new ShippingAddressResource([
//                 'name' => 'dans ma culotte',
//                 'addressLine1' => '42 rue des serviettes',
//                 'city' => 'Coupeville',
//                 'postalCode' => '42000',
//                 'country' => 'FR',
//             ]);
//             $purchase->setShippingAddress($shippingAddress);
            
//             $client = new ClientResource([
//                 'civility' => 'Mr',
//                 'firstName' => 'John',
//                 'lastName' => 'Snow',
//             ]);
//             $url = PurchaseRequest::getUrl();
//             $fields = $monetico->getFields($purchase);//then its ssl problem 
// // one min my browser has issue with ssl
//             return view('frontend.checkout.payment-form', compact('url', 'fields', 'shipping'));
//         }
//         else
//         {
//             return back()->withSuccess('You have no items on cart');
//         }
        
//     }


    // public function monetico()
    // {

    //     $monetico = new Monetico(
    //         '2970902',
    //         'FD242E4C26CBB51F9A1A82B440A7A11A4635C898',
    //         'ZeFruit'
    //     );
        
    //     $purchase = new PurchaseRequest([
    //         'reference' => 'ABCDEF123',
    //         'description' => 'Documentation',
    //         'language' => 'FR',
    //         'email' => 'john@snow.stark',
    //         'amount' => 42,
    //         'currency' => 'EUR',
    //         'dateTime' => new DateTime(),
    //         'successUrl' => 'http://localhost:8000/thanks',
    //         'errorUrl' => 'http://localhost:8000/oops',
    //     ]);
    //     $billingAddress = new BillingAddressResource([
    //         'name' => 'dans ma culotte',
    //         'addressLine1' => '42 rue des serviettes',
    //         'city' => 'Coupeville',
    //         'postalCode' => '42000',
    //         'country' => 'FR',
    //     ]);
    //     $purchase->setBillingAddress($billingAddress);
        
    //     $shippingAddress = new ShippingAddressResource([
    //         'name' => 'dans ma culotte',
    //         'addressLine1' => '42 rue des serviettes',
    //         'city' => 'Coupeville',
    //         'postalCode' => '42000',
    //         'country' => 'FR',
    //     ]);
    //     $purchase->setShippingAddress($shippingAddress);
        
    //     $client = new ClientResource([
    //         'civility' => 'Mr',
    //         'firstName' => 'John',
    //         'lastName' => 'Snow',
    //     ]);
    //     $url = PurchaseRequest::getUrl();
    //     $fields = $monetico->getFields($purchase);

    //     $client = new \GuzzleHttp\Client();
    //     $data = $client->request('POST', $url, $fields);
     
          

    // }

    public function store(Request $request){
        dd('hlw');
    }



}
