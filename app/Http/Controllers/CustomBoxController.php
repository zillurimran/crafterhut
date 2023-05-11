<?php

namespace App\Http\Controllers;

use App\Models\CustomBox;
use Illuminate\Http\Request;

class CustomBoxController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }

    public function customBoxIndex(){
        $custom_boxs = CustomBox::all();
        return view('admin.customBox.index', compact('custom_boxs'));
    }
    
    public function customBoxCreate(){
        return view('admin.customBox.create');
    }

    public function customBoxStore(Request $request){
        $request->validate([
            'name'          => 'required',
            'title'         => 'required', 
            'price'         => 'required',
            'stock'         => 'required',
            'image'         => 'required|image',
            'feature_image' => 'image',
        ]);

        $data = CustomBox::create($request->except('_token'));
        $path = public_path('uploads/custom_box');
        if($request->file('image')){
            $image = $request->file('image');
            $fileName ='image'. $data->id. rand(000,999). $image->extension();
            $image->move($path, $fileName);
            $data->image = $fileName;
        }
        if($request->file('feature_image')){
            $image2 = $request->file('feature_image');
            $fileName2 ='feature_image'. $data->id. rand(000,999). $image2->extension(); 
            $image2->move($path, $fileName2);
            $data->feature_image = $fileName2;
        }

        $data->save();

        return redirect()->route('custom_box.index')->with('success', 'Box Added Successfuly');
    }

    // status change 
    public function customBoxStatus($id){
        $box = CustomBox::find($id);
        if($box->status == 'hide'){
            $box->status = 'show';
        }else{
            $box->status = 'hide';
        }
        $box->save();
        return back()->with('success', 'Status Updated');
    }
    
    // Destroy 
    public function customBoxDestroy(Request $request){
        CustomBox::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function customBoxEdit($id){
        $box = CustomBox::find($id);
        return view('admin.customBox.edit', compact('box'));
    }
    
    public function customBoxUpdate(Request $request){ 
        $request->validate([
            'name'          => 'required',
            'title'         => 'required', 
            'price'         => 'required',
            'stock'         => 'required',
            'image'         => 'image',
            'feature_image' => 'image',
        ]);
        
        $data = CustomBox::find($request->id);
        $data->update($request->except(['_token', 'id']));
        $path = public_path('uploads/custom_box');
        if($request->file('image')){
            $image = $request->file('image');
            $fileName ='image'. $data->id. rand(000,999). $image->extension();
            $image->move($path, $fileName);
            $data->image = $fileName;
        }
        if($request->file('feature_image')){
            $image2 = $request->file('feature_image');
            $fileName2 ='feature_image'. $data->id. rand(000,999). $image2->extension(); 
            $image2->move($path, $fileName2);
            $data->feature_image = $fileName2;
        }
        
        $data->save();
        
        return redirect()->route('custom_box.index')->with('success', 'Box Updated Successfuly');
    }
    
    public function customBoxShow($id){
        $box = CustomBox::find($id);
        return view('admin.customBox.view', compact('box'));
    }

    // status change 
    public function customBoxStatusChange(Request $request){
        $box = CustomBox::find($request->id);
        if($box->status == 'hide'){
            $box->status = 'show';
        }else{
            $box->status = 'hide';
        }
        $box->save();
        return response('success');
    }


}
