<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        return view('admin.productColors.index',compact('product'));
    }

    public function store(Request $request){
        $request->validate([
            'product_color_image' => 'required|image'
        ]);

            $productColor = new ProductColor();
            $productColor->product_id = $request->product_id;
        if($request->file('product_color_image')){
            $image = $request->file('product_color_image');
            $filename = $productColor->id.'-'.time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/uploads/productColors/');
            $image->move($location, $filename);
            $productColor->product_color_image = $filename;
        }
            $productColor->save();
            return back()->withSuccess('Color added for this product');
    }
}
