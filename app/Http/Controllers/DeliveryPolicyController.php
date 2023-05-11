<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DeliveryPolicy;
use Illuminate\Http\Request;
use DB;
use Auth;

class DeliveryPolicyController extends Controller
{   
    
    public function index(){
        if(permissionCheck(Auth::id(),'DeliveryPolicy'))
        {
            return view('admin.deliveryPolicy.index',[ 'deliveryPolicy' => DeliveryPolicy::first(), 'categories' => Category::all()]);
        }else{
            return abort('403');
        }
        
    }

    public function allDeliveryPolicies(){
        if(permissionCheck(Auth::id(),'DeliveryPolicy'))
        {
            $policies = DB::table('delivery_policies')
                    ->join('categories','delivery_policies.category_id','categories.id')
                    ->select('delivery_policies.*', 'categories.name')
                    ->get();

        return view('admin.deliveryPolicy.allPolicies',['allPolicies' => $policies]);
        }else{
            return abort('403');
        }
        
    }

    public function store(Request $request){

        // dd($request);
         //Form Validation
         $request->validate([

            'category_id'       => 'required',
            'delivery_time'     => 'required',
            'delivery_type'     => 'required',
            'return_time'       => 'required',
            'warranty'          => 'required',
            'delivery_areas'    => 'required'
        ]);

        $policy = new DeliveryPolicy();
        $policy->category_id   = $request->category_id;
        $policy->delivery_time = $request->delivery_time;
        $policy->delivery_type = $request->delivery_type;
        $policy->return_time   = $request->return_time;
        $policy->warranty      = $request->warranty;
        $policy->delivery_areas= $request->delivery_areas;
        $policy->save();
        return back()->withSuccess('Delivery policy addeded');
        
    }
    public function update(Request $request, $id){
        
        $policy = DeliveryPolicy::find($id);
        $policy->delivery_time = $request->delivery_time;
        $policy->delivery_type = $request->delivery_type;
        $policy->return_time = $request->return_time;
        $policy->warranty = $request->warranty;
        $policy->delivery_areas = $request->delivery_areas;
        $policy->save();

        return back()->withSuccess('Policy Updated');

    }
}
