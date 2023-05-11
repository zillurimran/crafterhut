<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
use Auth;

class BlogController extends Controller
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
        if(permissionCheck(Auth::id(),'Blogs'))
        {
            return view('admin.blogs.index',[
                'blogs' => Blog::latest()->get(),
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
        if(permissionCheck(Auth::id(),'Blogs'))
        {
            return view('admin.blogs.create',[
                'blogcategories' => BlogCategory::orderBy('name', 'asc')->get(),
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
        $request->validate([
            'title'       => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image'       => 'required|image',
        ]);

        // Insert Data In Database
        $data = Blog::create([
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'description'   => $request->description,
            'description_2' => $request->description_2,
            'quote'         => $request->quote,
            'image'         => 'null.jpg',
            'created_at'    => Carbon::now(),
        ]);

        // Upload Image
        $image    = $request->file('image');
        $filename = $data->id. '.' . $image->extension();
        $location = public_path('uploads/blogs/' .$filename);
        Image::make($image)->save($location);

        Blog::find($data->id)->update([
            'image' => $filename,
        ]);

        // Upload Multiple Image
        if($request->multiple_images){

            $counter = 1;
        
            foreach($request->file('multiple_images') as $image){

                $multiple_image    = $image;
                $multiple_filename = $data->id. '-' . $counter . '.' . $image->extension();
                $multiple_location = public_path('uploads/blogs/'. $multiple_filename);

                Image::make($multiple_image)->save($multiple_location);

                // Insert Data in Database
                BlogImage::create([
                    'blog_id'         => $data->id,
                    'multiple_images' => $multiple_filename,
                    'created_at'      => Carbon::now(),
                ]);
                $counter++;
            }
        }

        // Return Back With Success Message
        return redirect()->route('blogs.index')->withSuccess('Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        $categories = BlogCategory::orderBy('name', 'asc')->get();

        return view('admin.blogs.edit', compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // Form Validation
        $request->validate([
            'title'       => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image'       => 'image',
        ]);

        // Check if request has image 
        if ($request->has('image')) {

             // Upload Image
            $image    = $request->file('image');
            $filename = $blog->id. '.' . $image->extension();
            $location = public_path('uploads/blogs/' .$filename);
            Image::make($image)->save($location);

            Blog::find($blog->id)->update([
                'image' => $filename,
            ]);
        }

        // Update Other Fields
        $blog->title          = $request->title;
        $blog->category_id    = $request->category_id;
        $blog->description    = $request->description;
        $blog->description_2  = $request->description_2;
        $blog->quote          = $request->quote;

        // Save Everything in database 
        $blog->save(); 

        // Return Back to Product List With Success Session Message
        return redirect()->route('blogs.show', $blog->id)->withSuccess('Updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        // Return back with success message
        return back()->withSuccess('Deleted Successfully');
    }

    /**
     * Edit Multiple Images
     */
    public function editBlogMultiple($id){

        $blog = Blog::find($id);

        return view('admin.blogs.editMultiple', compact('blog'));
    }

    /**
     * Edit Multiple Images
     */
    public function updateBlogMultiple(Request $request){

        // Form Validation
        $request->validate([
            'multiple_images' => 'required|image',
        ]);

        $data = BlogImage::find($request->id);

        $image          = $request->multiple_images;
        $filename       = $data->multiple_images;
        $location       = public_path('uploads/blogs/' . $filename);

        Image::make($image)->save($location);


        // Return Back With Success Message
        return back()->withSuccess('Updated Successfully'); 
    }

    /**
     * Delete Multiple Images
     */
    public function deleteBlogMultiple($id){

        $data = BlogImage::find($id);

        $data->delete();

        // Return back with success message
        return back()->withSuccess('Deleted sucessfully');
        
    }

// End    
}
