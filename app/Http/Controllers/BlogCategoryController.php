<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Blog;
use Auth;
class BlogCategoryController extends Controller
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
        if(permissionCheck(Auth::id(),'BlogCategories'))
        {
            return view('admin.blogs.categories.index',[
                'blogcategories' => BlogCategory::latest()->get(),
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
        if(permissionCheck(Auth::id(),'BlogCategories'))
        {
            return view('admin.blogs.categories.create');
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
            'name' => 'required|unique:blog_categories',
        ]);

        // Store In database
        BlogCategory::create($request->except('_token') + ['created_at' => Carbon::now()]);

        // Return Back With Success Mesasage
        return redirect()->route('blogCategories.index')->withSuccess('Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
        return view('admin.blogs.categories.edit', compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
         // Form Validation
         $request->validate([
            'name' => 'required|unique:blog_categories,name'.$blogCategory->id,
        ]);

        // Update Fields
        $blogCategory->name  = $request->name;

        // Save Everything in database 
        $blogCategory->save(); 

        // Return Back to List With Success Message
        return redirect()->route('blogCategories.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {

        foreach(Blog::where('category_id', $blogCategory->id)->get() as $item)
        {
            Blog::find($item->id)->delete();
        }
        //Delete from database
        $blogCategory->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}
