<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\CustomerMail;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\TendanceDernier;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Image;
use Auth;

class CategoryController extends Controller
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
    {   if(permissionCheck(Auth::id(), 'Categories'))
        {
        return view('admin.categories.index',[
            'options' => TendanceDernier::first(),
            'categories' => Category::latest()->get(),
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
        if(permissionCheck(Auth::id(),'Categories'))
        {
            return view('admin.categories.create');
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
        $request->validate([
            'name'  => 'required',
            'image' => 'required|image',
        ]);

        $category = Category::create($request->except('_token') + ['added_by'=> Auth::id(), 'created_at'=>Carbon::now()]);

        $image       = $request->file('image');
        $filename    = $category->id. '.' .$image->extension();
        $location    = public_path('uploads/categories/' . $filename); 
        Image::make($image)->save($location);

        Category::find($category->id)->update([
            'image' => $filename,
        ]);

        // Return Back to List With Success Message
        return redirect()->route('categories.index')->withSuccess('Added successfully');
    }

   
    // Status Hide,Show
    public function status($id)
    {
        $category = Category::find($id);

        if ($category->status == 'show') {
            
            $category->status = 'hide';

            // Hide Subcategories
            foreach ($category->getSubCategory as $value) {
                $value->status = 'hide';
                $value->save();
            }

            // Hide Products
            foreach($category->getProducts as $product){
                $product->status = 'hide';
                $product->save();
            }

            $category->save();

            return back()->withSuccess('Hidden successfully');

        } 
        else {

            $category->status = 'show';

            // Show Subcategories
            foreach ($category->getSubCategory as $value) {
                $value->status = 'show';
                $value->save();
            }
             // Show Products
             foreach($category->getProducts as $product){
                $product->status = 'show';
                $product->save();
            }
             
            $category->save();

            return back()->withSuccess('Show successfully');
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Update Validation 
        $request -> validate([
            'name'       => 'required',
            'image'      => 'image',
        ]);

        // Check if request has image 
        if($request->has('image'))
        {
              
            // Upload new image 
            $image       = $request->file('image');
            $filename    = $category->id. '.' .$image->extension();
            $location    = public_path('uploads/categories/' . $filename); 
            Image::make($image)->save($location);

            Category::find($category->id)->update([
                'image' => $filename,
            ]);
        } 

        // Update Other Fields
        $category->name  = $request->name;

        // Save Everything in database 
        $category->save(); 

        // Return Back to List With Success Message
        return redirect()->route('categories.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->getSubCategory->count() == 0){

            // Remove Image from server 
            // $existing = public_path('uploads/categories/' . $category->image);
            // unlink($existing);  

            //Delete from database
            $category->delete(); 

            // Return success message after deletion 
            return back()->withSuccess('Deleted successfully');
        }

        else {
            return back()->withWarning('Category has active subcategories.');
        }
        
    }

    public function categoryOrderChange(Request $request){
        $category = Category::find($request->id);
        $category->update([
            'orderby' => $request->order,
        ]);

        return response('Category Order Updated');
    }
    
    public function categoryStatusChange(Request $request){
        $category = Category::find($request->id);
        $category->update([
            $request->column => $request->value,
        ]);
        return response('Category Status Updated');
    }
    public function tendanceDerniersChange(Request $request){
        $category = TendanceDernier::first();
        $category->update([
            $request->column => $request->value,
        ]);
            return response('Status Updated'); 
       
        
    }

    public function getSubCategories(Request $request)
    {
        // $category = Category::find($request->id);
        $subcategories = SubCategory::where('category_id', $request->category_id)->where('status', 'show')->get();
        $view = view('admin.includes.subcategory')->with('subcategories', $subcategories)->render();
        return response()->json($view);
    }
}
