<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class BuyNowController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        // if(Cart::where('ip', request()->ip())->where('product_id', $id)->exists()){

            //  Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->increment('qty', $request->qty); 
            // Cart::where('ip', request()->ip())->delete();
        // }
        $cartedProduct = Cart::create([
            'product_id' => $id, 
            'qty'        => 1,
            'amount'     => $product->price, 
            'size'       => $product->size, 
            'color'      => $product->color ?? null, 
            'ip'         => request()->ip(),
        ]);    

        return redirect()->route('checkout.index');
        
        // $wishlist=Wishlist::where('product_id',$id)->get();
        // foreach($wishlist as $wishlist){
        //   $wishlist->delete();
        // }
    
        //   if(Cart::where('product_id', $id)->exists()){
    
        //     //  Cart::where('ip', request()->ip())->where('product_id', $request->product_id)->increment('qty', $request->qty); 
        //     Cart::where('product_id', $id)->update([
        //                 'qty' => 1,
        //                 'amount' => $product->price,
        //               ]);
    
        //   //    $count = cartCount();
        //   //    $cartItems = cartItems();
        //   //    $view = view('includes.cart_items', compact('cartItems')); 
        //   //    $items = $view->render();    
    
        //   //    return response()->json(['count' => $count, 'items' => $items]);
        //         return redirect()->route('checkout.index');
        //   }
        //   else 
        //   {
        //       Cart::create([
        //           'product_id' => $id, 
        //           'qty'        => 1,
        //           'amount'     => $product->price, 
        //           'size'       => $product->size, 
        //           'color'      => $product->color, 
        //           'ip'         => $product->id,
        //       ]);
    
            
              
                  // $count = cartCount();
                  // $cartItems = cartItems();
                  // $view = view('includes.cart_items', compact('cartItems')); 
                  // $items = $view->render();
                  // $total = cartTotal() . '.00';
    
                  // return response()->json(['count' => $count, 'items' => $items, 'total' => $total]);
    
          }

          public function selectColor(Request $request){
                $colors = ProductColor::where('product_id', $request->product_id)->get();
                return response()->json([
                    'colors' => $colors
                ]);
        
          }
 }

