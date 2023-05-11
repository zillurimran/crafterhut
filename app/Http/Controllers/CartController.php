<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CartController extends Controller
{

  // Index
  public function index($coupon_name = "")
  {
      if(cartTotal() > 0)
      {
        return view('frontend.cart.index', ['products' => Product::latest()->take(4)->get()]);
      }
      else 
      {
        return redirect('/')->withSuccess('You do not have any products on cart');
      }
  }


  // Store
  // public function store(Request $request)
  // {
  //     if(Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->exists())
  //     {
  //         Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->update([
  //           'qty' => $request->qty,
  //           'amount' => ($request->amount/1000) * $request->qty,

  //         ]);

  //     //    $count = cartCount();
  //     //    $cartItems = cartItems();
  //     //    $view = view('includes.cart_items', compact('cartItems')); 
  //     //    $items = $view->render();

  //     //    return response()->json(['count' => $count, 'items' => $items]);
  //     return back()->withSuccess('Product added to cart');
  //     }
  //     else 
  //     {
  //         Cart::create([
  //             'product_id' => $request->product_id, 
  //             'qty'        => $request->qty * 1000,
  //             'amount'     => ($request->amount/1000) * $request->qty*1000, 
  //             'size'       => $request->size, 
  //             'color'      => $request->color, 
  //             'ip'         => $request->ip(),
  //         ]);

  //         return back();
  //             // $count = cartCount();
  //             // $cartItems = cartItems();
  //             // $view = view('includes.cart_items', compact('cartItems')); 
  //             // $items = $view->render();
  //             // $total = cartTotal() . '.00';

  //             // return response()->json(['count' => $count, 'items' => $items, 'total' => $total]);


  //     }



  // }

  public function store(Request $request)
  {
    
    
    $wishlist=Wishlist::where('product_id',$request->product_id)->get();
    foreach($wishlist as $wishlist){
      $wishlist->delete();
    }

      if(Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->exists()){

        //  Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->increment('qty', $request->qty); 
        Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->update([
                    'qty' => $request->qty,
                    'amount' => $request->amount * $request->qty,
        
                  ]);

      //    $count = cartCount();
      //    $cartItems = cartItems();
      //    $view = view('includes.cart_items', compact('cartItems')); 
      //    $items = $view->render();    

      //    return response()->json(['count' => $count, 'items' => $items]);
            return back()->withSuccess('Product added to cart');
      }
      else 
      {
          Cart::create([
              'product_id' => $request->product_id, 
              'qty'        => $request->qty,
              'amount'     => $request->amount * $request->qty, 
              'size'       => $request->size, 
              'color'      => $request->color, 
              'ip'         => $request->ip(),
          ]);

        
          return back();
              // $count = cartCount();
              // $cartItems = cartItems();
              // $view = view('includes.cart_items', compact('cartItems')); 
              // $items = $view->render();
              // $total = cartTotal() . '.00';

              // return response()->json(['count' => $count, 'items' => $items, 'total' => $total]);

      }

  }

  // Delete
  public function delete($id)
  {
      $data = Cart::find($id); 
      $data->delete();

      return back()->withSuccess('Product removed');

      // $total = cartTotal() . '.00';
      // $count = cartCount();
      // return response()->json(['count' => $count, 'total' => $total]);
  }

  // CartUpdate
  public function cartUpdate(Request $request)
  {

    foreach ($request->id as $key => $id) {
      Cart::find($id)->update([
        'qty' => $request->qty[$key],
        'amount' => $request->amount[$key] * $request->qty[$key],
      ]);
    }
      return back()->withSuccess('Cart Updated');
  }

// END 
}
