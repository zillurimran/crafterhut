<?php

namespace App\Http\Controllers;

use App\Models\SocialIconSetting;
use Illuminate\Http\Request;
use Auth;

class SocialIconSettingController extends Controller
{
    /**
     * Construct
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(permissionCheck(Auth::id(),'SocialIconSettings'))
        {
            return view('admin.socialicons.index',[

                'socialiconsettings' => SocialIconSetting::first(),
            ]);
        }else{
            return abort('403');
        }
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialIconSetting  $socialIconSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialIconSetting $socialIconSetting)
    {
        // Form Validation
        $request->validate([
            'fb'            => 'required',
            'fb_url'        => 'required',
            'instagram'     => 'required',
            'instagram_url' => 'required',
            'youtube'       => 'required',
            'youtube_url'   => 'required',
            'twitter'       => 'required',
            'twitter_url'   => 'required',
        ]);


        $socialIconSetting->fb                = $request->fb;
        $socialIconSetting->fb_url            = $request->fb_url;
        $socialIconSetting->instagram         = $request->instagram;
        $socialIconSetting->instagram_url     = $request->instagram_url;
        $socialIconSetting->youtube           = $request->youtube;
        $socialIconSetting->youtube_url       = $request->youtube_url;
        $socialIconSetting->twitter           = $request->twitter;
        $socialIconSetting->twitter_url       = $request->twitter_url;

        $socialIconSetting->save();

        return back()->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialIconSetting  $socialIconSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialIconSetting $socialIconSetting)
    {
        //
    }
}
