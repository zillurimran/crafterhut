<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
      {
        // $this->middleware(['checkAdmin','auth'])->only(["index","destory"]);
        $this->middleware(["checkAdmin","auth"])->except('store');

      }
    public function index()
    {   
        
        if(permissionCheck(Auth::id(),'Subscriptions'))
        {   
            return view('admin.subscriptions.index',[
                'subscriptions' => Subscription::latest()->get(),
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
        //
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
            'email'    => 'required|unique:subscriptions,email',
        ]);

        Subscription::create($request->except('_token') + ['created_at' => Carbon::now()]);

        return response()->json([
            'status'=>'success'
           ]); 

        // // Return back with success message
        // return back()->withSuccess('Added successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        // Return back with success message
        return redirect()->route('subscriptions.index')->withSuccess('Deleted successfully');
    }
}
