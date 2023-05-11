<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
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
        if(permissionCheck(Auth::id(),'Banners'))
        {
            $banners = Banner::latest()->get();
            return view('admin.banners.index', compact('banners'));
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
        if(permissionCheck(Auth::id(),'Banners'))
        {
            return view('admin.banners.create');
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
        //Form Validation
        $request->validate([

            'title'             => 'required',
            'subtitle'          => 'required',
            'short_description' => 'required',
            'button_url'        => 'required',
            'image'             => 'required|image',

        ]);

        $banner = Banner::create($request->except('_token') + ['created_at' => Carbon::now()]);

        $image       = $request->file('image');
        $filename    = $banner->id. '.' .$image->extension();
        $location    = public_path('uploads/banners/' . $filename); 
        Image::make($image)->save($location);

        banner::find($banner->id)->update([
            'image' => $filename,
        ]);

        // Return Back to List With Success Message
        return redirect()->route('banners.index')->withSuccess('Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //Form Validation
        $request->validate([

            'title'         => 'required',
            'subtitle'      => 'required',
            'short_description'   => 'required',
            'button_url'    => 'required',
            'image'         => 'image',
        ]);

        if ($request->has('image')) {

            // Upload new Image
            $image       = $request->file('image');
            $filename    = $banner->id. '.' .$image->extension();
            $location    = public_path('uploads/banners/' . $filename); 
            Image::make($image)->save($location);

            banner::find($banner->id)->update([
                'image' => $filename,
            ]); 
        }

        // Update Other Fields
        $banner->title                  = $request->title;
        $banner->subtitle               = $request->subtitle;
        $banner->short_description      = $request->short_description;
        $banner->button_url             = $request->button_url;

        // Save Everything in database 
        $banner->save(); 

        // Return Back to List With Success Message
        return redirect()->route('banners.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
   
        $banner->delete();

         // Return Back to List With Success Message
         return redirect()->route('banners.index')->withSuccess('Deleted successfully');
    }
}
