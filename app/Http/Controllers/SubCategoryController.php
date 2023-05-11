<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSubcategory;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class SubCategoryController extends Controller
{

       /**
     *  Constructor
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
        if(permissionCheck(Auth::id(), 'SubCategories'))
        {
            return view('admin.subcategories.index', [
                'subcategories'  => SubCategory::latest()->get(),
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
        if(permissionCheck(Auth::id(),'SubCategories'))
        {
            return view('admin.subcategories.create', [
                'categories' => Category::latest()->get(),
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
        $request->validate([
            'name'         => 'required',
            'category_id'  => 'required',
        ]); 

        SubCategory::create($request->except('_token') + ['created_at' => Carbon::now()]);

         // Return back with success message
        return redirect()->route('subCategories.index')->withSuccess('Added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::orderBy('name', 'asc')->get();

         // Return back with success message
        return view('admin.subcategories.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'name'        => 'required', 
            'category_id' => 'required',
        ]);

        $subCategory->name         = $request->name; 
        $subCategory->category_id  = $request->category_id; 

        $subCategory->save(); 

        // Return redirect; 
        return redirect()->route('subCategories.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        if ($subCategory->getProducts) {

            return back()->withWarning('This subcategory has active products, you have to delete products first');
        } 
        else {
            $subCategory->delete(); 

            return back()->withSuccess('Deleted successfully');
        }
        
    }


    // Subcategory Status Hide/Show
    public function status($id)
    {
        $subCategory = SubCategory::find($id);

        $productsubcategories = ProductSubcategory::where('subCategory_id', $id)->get();

        if ($subCategory->status == 'show') {
            
            $subCategory->status = 'hide';
            
            // Hide Products
            foreach($productsubcategories as $productsubcategory){

                $products = Product::where('id', $productsubcategory->product_id)->get();

                foreach($products as $product){

                    $product->status = 'hide';
                    $product->save();
                }

            }
            
            $subCategory->save();

            return back()->withSuccess('Hidden successfully');

        } 
        else {
            $subCategory->status = 'show';

            // Show Products
            foreach($productsubcategories as $productsubcategory){

                $products = Product::where('id', $productsubcategory->product_id)->get();

               foreach($products as $product){

                $product->status = 'show';
                $product->save();

               }

            }
             
            $subCategory->save();

            return back()->withSuccess('Show successfully');
        }
    }



}
