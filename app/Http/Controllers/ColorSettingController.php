<?php

namespace App\Http\Controllers;

use App\Models\ColorSetting;
use Illuminate\Http\Request;
use Auth;

class ColorSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(permissionCheck(Auth::id(),'ColorSettings'))
        {
            return view('admin.colorSettings.index',[
                'colorSettings' => ColorSetting::first(),
            ]);
        }else{
            return abort('403');
        }
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ColorSetting  $colorSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColorSetting $colorSetting)
    {
        $request->validate([
            'brand_color'             => 'required',
            'sub_color'               => 'required',
            'footer_background'       => 'required',
        ]);

        $colorSetting->brand_color          = $request->brand_color;
        $colorSetting->sub_color            = $request->sub_color;
        $colorSetting->footer_background    = $request->footer_background;


        $colorSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ColorSetting  $colorSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColorSetting $colorSetting)
    {
        //
    }
}
