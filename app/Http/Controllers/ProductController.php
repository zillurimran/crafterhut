<?php

namespace App\Http\Controllers;

use Str;
use Image;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductImage;
use App\Models\ProductSubcategory;
use Illuminate\Http\Request;
use Auth; 

class ProductController extends Controller
{

    /**
     * Construct
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(permissionCheck(Auth::id(),'Products'))
        {
            return view('admin.products.index', [

                'products' => Product::latest()->get()
            ]);
        }else{
            return abort('403');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(permissionCheck(Auth::id(), 'Products'))
        {
            return view('admin.products.create',[
                'subCategory' => SubCategory::orderBy('name', 'asc')->get(),
                'categories'    => Category::orderBy('name', 'asc')->get(),
            ]);
        }else{
            return abort('403');
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        // Form Validation
        $request -> validate([
            'name'              => 'required',
            'short_description' => 'required',
            'sku'               => 'required',
            'display_as'        => 'required',
            'price'             => 'required|numeric', 
            'category_id'       => 'required', 
            'subCategory_id'    => 'required|array|min:1', 
            'subCategory_id*'   => 'required',
            'qty'               => 'required',
            'qty_in'            => 'required',
            'image'             => 'required|image', 
        ],
            [
                'subCategory_id.array'      => 'Sub Category is required',
                'subCategory_id.required'   => 'Sub Category is required',
            ]
        );

        // Slug
        $create_slug = str::slug($request->name);
        $random      = str::random(10);

        $slug = $create_slug. '-' .$random;

       
         // Price with 5.5% tax
         $price = ($request->price * 5.5)/100;

       // Insert Data in Database
        $product = Product::create([
            'name'                => $request->name,
            'short_description'   => $request->short_description,
            'sku'                 => $request->sku,
            'display_as'          => $request->display_as,
            'price'               => $request->price + $price, 
            'category_id'         => $request->category_id, 
            'qty'                 => $request->qty, 
            'qty_in'              => $request->qty_in, 
            'image'               => 'demo.jpg', 
            'slug'                => $slug,
            'discount'            => $request->discount,
            'discount_till'       => $request->discount_till,
            'type'                => $request->type,
            'custom_box_status'   => $request->custom_box_status,
        ]);
        

        // Upload Image
        $image       = $request->file('image');
        $filename    = $product->id. '.' .$image->extension();
        $location    = public_path('uploads/products/' . $filename); 
        Image::make($image)->save($location);

        Product::find($product->id)->update([
            'image' => $filename,
        ]);

        // Product SubCategories
        foreach ($request->subCategory_id as $subcategories) {

            ProductSubcategory::create([
                'subCategory_id'    => $subcategories,
                'product_id'        => $product->id,
                'created_at'        => Carbon::now(),
            ]);
        }



        // Upload Multiple Image
        if($request->multiple_image){

            $counter = 1;
        
            foreach($request->file('multiple_image') as $image){

                $multiple_image    = $image;
                $multiple_filename = $product->id. '-' . $counter . '.' . $image->extension();
                $multiple_location = public_path('uploads/products/'. $multiple_filename);

                Image::make($multiple_image)->save($multiple_location);

                // Insert Data in Database
                ProductImage::create([
                    'product_id'     => $product->id,
                    'multiple_image' => $multiple_filename,
                    'created_at'     => Carbon::now(),
                ]);

                $counter++;
            }
        }


        if($request->color)
        {
            $colors =  $request->color;

            $explodes = explode(',' , $colors);

            foreach($explodes as $value)
            {
                Color::create([
                    'product_id' => $product->id, 
                    'color'      => $value,
                    'created_at' => Carbon::now(),
                ]);
              
            }
        }

        if($request->size)
        {
            $sizes =  $request->size;

            $explodes = explode(',' , $sizes);

            foreach($explodes as $value)
            {
                Size::create([
                    'product_id' => $product->id, 
                    'size'       => $value,
                    'created_at' => Carbon::now(),
                ]);
            }
        }

        // Return Back With Success Message
        
        return redirect()->route('products.index')->withSuccess('Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $subcategories = ProductSubcategory::where('product_id', $product->subCategory_id)->get();

        return view('admin.products.view', compact('product', 'subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $subCategories = ProductSubcategory::where('product_id', $product->id)->get();
        $categories    = Category::orderBy('name', 'asc')->get();

        return view('admin.products.edit', compact('product', 'subCategories', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $sale = Product::where('display_as', 'sale')->get();
        foreach($sale as $sal)
        {
            $sal->display_as = 'normal';
            $sal->save();
        }
         // Update Validation 
            $request -> validate([
                'name'              => 'required',
                'short_description' => 'required',
                'sku'               => 'required',
                'display_as'        => 'required',
                'price'             => 'required|numeric', 
                'category_id'       => 'required', 
                'subCategory_id'    => 'required|array|min:1', 
                'subCategory_id*'   => 'required',
                'qty'               => 'required',
                'qty_in'            => 'required',
                'image'             => 'image',
            ]);


        // Product SubCategories
        $data = ProductSubcategory::where('product_id', $product->id)->get();

        foreach($data as $i){
            $i->delete();
        }

        // Product SubCategories
        foreach ($request->subCategory_id as $id) {

            ProductSubcategory::create([
                'product_id' => $product->id, 
                'subCategory_id' => $id,
            ]);
        } 



        // Check if request has image 
        if($request->has('image')){

            // Upload new image 
            $image       = $request->file('image');
            $filename    = $product->id. '.' .$image->extension();
            $location    = public_path('uploads/products/' . $filename); 

            Image::make($image)->save($location);

            Product::find($product->id)->update([
                'image' => $filename,
            ]);
        } 


        
         // Price with 5.5% tax
         $price = ($request->price * 5.5)/100;

        // Update Other Fields
        $product->name                 = $request->name;
        $product->short_description    = $request->short_description;
        $product->price                = $request->price + $price;
        $product->sku                  = $request->sku;
        $product->category_id          = $request->category_id;
        $product->qty                  = $request->qty;
        $product->qty_in               = $request->qty_in;
        $product->display_as           = $request->display_as;
        $product->discount             = $request->discount;
        $product->discount_till        = $request->discount_till;
        $product->type                 = $request->type;  
        $product->custom_box_status    = $request->custom_box_status;

        // Save Everything in database 
        $product->save(); 

        if($request->price)
        {
            $cart = Cart::where('product_id', $product->id)->get();
            foreach($cart as $c)
            {
                $c->amount = ($request->price/1000) * $c->qty;
                $c->save();
            }
        }

        // Return Back to Product List With Success Session Message
        return redirect()->route('products.show', $product->id)->withSuccess('Updated successfully');
            
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $subcats = ProductSubcategory::where('product_id', $product->id)->get();

        if($subcats->count() > 0)
        {
            foreach($subcats as $subcat)
            {
                $subcat->delete();
            }
        }
        // Delete Existing multiple Image
        foreach ($product->getMultipleImages as $value) {

            if ($value->multiple_image) {

                // $existing = public_path('uploads/products/' . $value->multiple_image); 
                // unlink($existing);
            }
        }

        // Delete existing image
        // $existing = public_path('uploads/products/' . $product->image); 
        // unlink($existing);

        foreach(Cart::all() as $cart)
        {
            if($cart->product_id == $product->id)
            {
                $cart->delete();
            }
        }

        $product->delete();

        // Return back with success message
        return back()->withSuccess('Subcategory deleted');
    }


    /**
     * Update Multiple Images
     */
    public function updateMultiple($id)
    {
        $product = Product::find($id);

         // Return back with success message
        return view('admin.products.editMultiple', compact('product'));
    }
    /**
     * Replace Multiple Images
     */
    public function replaceMultiple(Request $request)
    {
        $request->validate([
            'multiple_image' => 'required|image',
        ]);

        $data = ProductImage::find($request->id);

        // $existing = public_path('uploads/products/' . $data->multiple_image); 
        // unlink($existing);
        
        $multi_image = $request->multiple_image; 
        $filename    = $data->multiple_image;
        $location    = public_path('uploads/products/' . $filename);

        Image::make($multi_image)->save($location);

         // Return back with success message
        return back()->withSuccess('Image updated');

    }

    /**
     * Delete Multiple Images
     */
    public function deleteMultiple($id){

        $multiple_image = ProductImage::find($id);
        
        // $existing = public_path('uploads/products/' . $multiple_image->multiple_image); 
        // unlink($existing);

        $multiple_image->delete();
        // Return back with success message
        return back()->withSuccess('Deleted sucessfully');
    }

      /**
     *  Ajax Call 
     */
    public function getsubcategory(Request $request)
    {
       $subcategories = SubCategory::where('category_id', $request->category)->get(); 

       $view = view('admin.includes.subcategory', compact('subcategories')); 
       $response = $view->render();
       return response()->json(['success' => $response]); 
    }


    /**
     * Edit Sizes
     */
    public function editSize($id){

        $product = Product::find($id);

        return view('admin.products.editSize', compact('product'));
    }

    /**
     * Update Sizes
     */
    public function updateSize(Request $request){

        $size = Size::find($request->id);

        // Update fields
        $size->size = $request->size;

        // Save Everything in database 
        $size->save();

        // Return Back With Success Message
        return back()->withSuccess('Updated Successfully'); 
    }

    /**
     * Delete Sizes
     */
    public function deleteSize($id){

        $size = Size::find($id);

        // Delete Everything in database 
        $size->delete();

        // Return back with success message
        return back()->withSuccess('Deleted sucessfully');
    }


    /**
     * Edit Colors
     */
    public function editColor($id){

        $product = Product::find($id);

        return view('admin.products.editColor', compact('product'));
    }

    /**
     * Update Colors
     */
    public function updateColor(Request $request){

        $color = Color::find($request->id);

        // Update fields
        $color->color = $request->color;

        // Save Everything in database 
        $color->save();

        // Return Back With Success Message
        return back()->withSuccess('Updated Successfully'); 
    }

    /**
     * Delete Colors
     */
    public function deleteColor($id){

        $color = Color::find($id);

        // Delete Everything in database 
        $color->delete();

        // Return back with success message
        return back()->withSuccess('Deleted sucessfully');
    }



    // Status Hide/Show
    public function status($id)
    {
        $product = Product::find($id);

        if ($product->status == 'show') {
            
            $product->status = 'hide';
            
            $product->save();

            return back()->withSuccess('Hidden successfully');

        } 
        else {
            $product->status = 'show';
             
            $product->save();

            return back()->withSuccess('Show successfully');
        }
    }

    public function rq($id)
    {
        $product = Product::find($id); 
        return view('frontend.rq', compact('product'));
    }

    public function storeColor(Request $request){
        
        $request->validate([
            'color' => 'required'
        ]);

        $color = new Color();
        $color->product_id = $request->product_id;
        $color->color = $request->color;
        $color->save();
        return back()->withSuccess('Color added for this product');
    }


// END     
}
