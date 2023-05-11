<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\OrderDetail;
use App\Models\ThemeSetting;
use App\Models\UserPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Shetabit\Visitor\Models\Visit;

class AdminController extends Controller
{
    /**
     *  Constructor
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('verified');
    //     $this->middleware('checkAdmin');
    // }

    /**
     *  Admin Statistics 
     */
    public function index()
    {

    //    if( permissionCheck(Auth::id(), 'Dashboard')) 
    //    {
        

        $total = Visit::whereIn('browser', ['IE', 'Firefox', 'Chrome', 'Safari', 'Opera'])->whereDate('created_at', '>', Carbon::now()->subDays(28))->get();
        $chrome = $total->where('browser', 'Chrome')->count();
        $firefox = $total->where('browser', 'Firefox')->count();
        $internet = $total->where('browser', 'IE')->count();
        $safari = $total->where('browser', 'Safari')->count();
        $opera = $total->where('browser', 'Opera')->count();
        $order_pending=Order::where('status','pending')->count();
        $total_earning=Order::where('payment_status','paid')->sum('order_total');
        
        $total = $total->count();
        if($total == 0)
        {
            $total = 1; 
        }
        $browser = [];
        $browser['chrome'] = round(($chrome /  $total) * 100);
        $browser['firefox'] = round(($firefox /  $total) * 100);
        $browser['internet'] = round(($internet /  $total) * 100);
        $browser['safari'] = round(($safari /  $total) * 100);
        $browser['opera'] = round(($opera /  $total) * 100);

        $users = User::all();
        $today_page_views = Visit::whereDate('created_at', '=', Carbon::today())->count();

        $unique_users = User::count();


        $top_pages = Visit::select('url')
            ->selectRaw('COUNT(*) AS count')
            ->groupBy('url')
            ->orderByDesc('count')
            ->limit(10)
            ->get();
        return view('admin.index',compact('users', 'browser', 'today_page_views', 'unique_users', 'top_pages','order_pending','total_earning'));
    //    }
    //    else 
    //    {
    //      return abort('403');
    //    }
    }

    // User List
    public function userList()
    {   
       if(permissionCheck(Auth::id(),'Users'))
       {
        return view('admin.users.index', ['users' => User::where('role', 'user')->orderBy('id', 'desc')->get()]);
       }else{
        return abort('403');
       }
    }
    // User List
    public function adminList()
    {   
        if(permissionCheck(Auth::id(), 'Admins'))
        {
            return view('admin.users.admin', [
                'users' => User::where('role', 'admin')->orderBy('id', 'desc')->get()
            ]);
        }else{
            return abort('403');
        }
        
            
    }

    public function userDetails($id){

        $user = User::find($id);

        $orders = Order::where('user_id', $user->id)->latest()->get(); 

        return view('admin.users.details',[
            'user'      => $user,
            'orders'    => $orders,
        ]);
    }

    // User delete
    public function delete($id)
    {
        $data = User::find($id); 
        $orders = Order::where('user_id', $id)->get(); 
        foreach($orders as $order)
        {
            $details = OrderDetail::where('order_id', $order->id)->get(); 
            foreach($details as $detail)
            {
                OrderDetail::find($detail->id)->delete(); 
            }
            Order::find($order->id)->delete();
        }
        $wishlists = Wishlist::where('user_id', $id)->get();
        foreach($wishlists as $wish)
        {
            Wishlist::find($wish->id)->delete();
        } 

        $data->delete(); 
        return back()->withSuccess('User deleted');
        
    }

    // Dark-Mode/Light-Mode
    public function theme()
    {
        if(ThemeSetting::where('user_id', Auth::id())->exists())
        {
            $data = ThemeSetting::where('user_id', Auth::id())->first(); 

            if($data->mode == 'light-layout')
            {
                $data->mode = 'dark-layout'; 
                $data->save();
                die();
            }
            if($data->mode == 'dark-layout')
            {
                $data->mode = 'light-layout'; 
                $data->save();
                die();
            }
        }
        else 
        {
           $data =  ThemeSetting::create([
                'mode' => 'dark-layout', 
                'user_id' => Auth::id(), 
                'created_at' => Carbon::now(),
            ]);

            die();
        }
    }

    // Toogle
    public function themenav()
    {
        if(ThemeSetting::where('user_id', Auth::id())->exists())
        {
            $data = ThemeSetting::where('user_id', Auth::id())->first(); 

            if($data->nav == 'expanded')
            {
                $data->nav = 'collapsed'; 
                $data->save();
                die();
            }
            if($data->nav == 'collapsed')
            {
                $data->nav = 'expanded'; 
                $data->save();
                die();
            }
        }
        else 
        {
           $data =  ThemeSetting::create([
                'nav' => 'collapsed', 
                'user_id' => Auth::id(), 
                'created_at' => Carbon::now(),
            ]);

            die();
        }
    }

    // Profile
    public function profile()
    {
        return view('admin.profile.index');
    }


    // Profile Photo
    public function profilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo_path' => 'required|image', 
        ]);

        $image = $request->file('profile_photo_path');
        $filename = Auth::id(). '.' . $image->extension(); 
        $location = public_path('uploads/users'); 
        $image->move($location, $filename);

        $data = User::find(Auth::id()); 
        $data->profile_photo_path = $filename; 
        $data->save(); 
        return back()->withSuccess('Profile picture updated');

    }


    // Profile Password
    public function profilePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $data = User::find(Auth::id()); 
        $data->password = bcrypt($request->password); 
        $data->save(); 
        return back()->withSuccess('Password updated');
    }

    // Contact message save 
    public function contactIndex(){
        if(permissionCheck(Auth::id(),'ContactMessage')){
            return view('admin.contact.index', ['messages' => Contact::latest()->get()]);
        }else{
            return abort('403');
        }
        
    }

    public function contactMessageDelete(Request $request){
        Contact::find($request->id)->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function addAdmin(Request $request){ 
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password'=> 'required|same:password',
        ]);
        
        User::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin'
        ]);

       return redirect(route('admin.index'))->withSuccess('successful');
    }


    public function addPermission(Request $request)
    {   
         UserPermission::where('user_id', $request->user_id)->get()->each->delete();
        if($request->module){
            foreach($request->module as $module)
            {  
               UserPermission::create([
                    'module'    => $module, 
                    'user_id'   => $request->user_id
               ]);
            }
            return back();
        }else{
            return back();
        }
        
    }
}
