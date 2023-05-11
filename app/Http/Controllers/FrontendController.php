<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\User;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\CustomBox;
use App\Models\OrderDetail;
use App\Models\SubCategory;
use App\Models\BlogCategory;
use App\Models\Color;
use App\Models\Contact;
use App\Models\DeliveryPolicy;
use App\Models\Faq;
use App\Models\PickupAddress;
use App\Models\ProductColor;
use App\Models\TendanceDernier;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index', [
            'tendanceDerniers' => TendanceDernier::first(),
            'user'             => User::first(),
            'categories'       => Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get(),
            'latestProducts'   => Product::where('status', 'show')->latest()->get(),
            'featuredProducts' => Product::where('status', 'show')->where('display_as', 'featured')
                                         ->orderBy('id', 'desc')
                                         ->get(),

            'trendingProducts' => Product::where('status', 'show')->where('display_as', 'trending')
                                         ->orderBy('id', 'desc')
                                         ->get(),
            'saleProducts'     => Product::where('status', 'show')->where('display_as', 'sale')
                                         ->orderBy('id', 'desc')
                                         ->get(),
                                         
            'banner'          => Banner::inRandomOrder()->first(),
            'banners'         => Banner::inRandomOrder()->get(),
            'blogs'           => Blog::latest()->take(3)->get(),
            'bestSellers'     => OrderDetail::with('get_product_info')
                                          ->select('prod_id', DB::raw('count(*) as total'))
                                          ->groupBy('prod_id')
                                          // ->where('created_at', '>', Carbon::now()->subDays(30) )
                                          ->orderBy('total', 'desc')
                                          ->get(),
            
        ]);
    }

    public function products()
    {
        return view('frontend.products', [
            'categories' => Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get(),
            'products'   => Product::where('status', 'show')->latest()->paginate(100),
            'total'      => Product::where('status', 'show')->get()->count(),
        ]); 
    }

    public function productsbycategory($name)
    {
        $category      = Category::where('name', $name)->first();
        $products      = Product::where('status', 'show')->where('category_id', $category->id)->paginate(20);
        // $products      = Product::where('category_id', $category->id)->paginate(20);git 
        $total         = Product::where('status', 'show')->where('category_id', $category->id)->get()->count();
        $categories    = Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = SubCategory::where('status', 'show')->where('category_id', $category->id)->get();

        return view('frontend.products', compact('category', 'products', 'total', 'categories', 'subcategories'));
        
    }

    public function productsbysubcategory($name, $id)
    {
        $subcat = SubCategory::where('id', $id)->first();
        $category = $subcat->getCategory;
        $products = Product::where('subCategory_id', $subcat->id)->where('status', 'show')->paginate(20);
        $total = Product::where('category_id', $category->id)->where('status', 'show')->get()->count();
        $categories = Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get();
        $subcategories = SubCategory::where('status', 'show')->where('category_id', $category->id)->get();
        return view('frontend.products', compact('category', 'products', 'total', 'categories', 'subcategories'));
    }

    /**
     *  Product Details 
     */
    public function productDetails($slug)
    {
        $product = Product::where('slug', $slug)->first(); 
        $products = Product::where('id', '!=', $product->id)->where('status', 'show')->get();
        $deliveryPolicy = DeliveryPolicy::where('category_id', $product->category_id)->first();

        $productColors = ProductColor::where('product_id', $product->id)->get();
        
        

        if($product->status == 'show')
        {   
            
            // get previous user id
            $previous = Product::where('id', '<', $product->id)->where('status', 'show')->max('id');
            $previousP = Product::find($previous);
    
            // get next user id
            $next = Product::where('id', '>', $product->id)->where('status', 'show')->min('id');
            $nextP = Product::find($next);
            return view('frontend.productdetails', compact('product', 'products', 'nextP', 'previousP', 'deliveryPolicy', 'productColors'));
        }
        else
        {
            return redirect()->back();
        }
    }


    /**
     * Blog List
     */
    public function blogList(){

        $blogs = Blog::latest()->get();

        $popularBlogs = Blog::take(3)->get();

        $categories = BlogCategory::orderBy('name', 'asc')->get();

        return view('frontend.blogs.list', compact('blogs', 'categories', 'popularBlogs'));
    }

    /**
     * Blog Details
     */
    public function blogDetails($id){

        $blog = Blog::find($id);

        $popularBlogs = Blog::take(3)->get();

        $categories = BlogCategory::orderBy('name', 'asc')->get();

        return view('frontend.blogs.details',compact('blog','categories', 'popularBlogs'));
    }


    /**
     *  Search Products 
     */
    public function search()
    {
        // dd($request->all());
        
        $query = request()->q;

        $keywords = explode(' ', $query);
        $category_id =  request()->product_type; 


        //    $products = Product::where('name', 'LIKE', '%'.$query.'%')
        //                       ->paginate(20);
        $products =  Product::where('status', 'show')->where(function($query) use ($keywords)
        {
            foreach($keywords as $k)
            {
                $query->Where('name', 'LIKE', "%$k%");
            }

        
        })->paginate(20);
            $total = $products->count();
            $categories = Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get();
            return view('frontend.products', compact('products', 'total', 'categories',));
        
    }

    public function searchbyprice(Request $request)
    {
         $price = str_replace('$', ' ', $request->price); 
         $explode = explode('-', $price); 

         $min =  $explode['0'];
         $max =  $explode['1']; 

        if($request->id != '')
        {
            $products = Product::where('category_id', $request->id)->whereBetween('price', [$min, $max])->where('status', 'show')->paginate(100);
        }
        else 
        {
            $products = Product::whereBetween('price', [$min, $max])->where('status', 'show')->paginate(100);
        }


        $view = view('includes.productpage', compact('products')); 

        $response = $view->render();

        return response()->json(['response' => $response]);


    }

    public function quickview($id)
    {
        $product = Product::find($id); 
        return view('frontend.qv', compact('product'));
    }

    // Custom box 
    public function CustomBox(){ 
        $products = Product::where('status', 'show')->get(); 
        $categories = Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get();
        $boxs = CustomBox::where('status', 'show')->get();
        return view('includes.custom_box', compact('products', 'boxs', 'categories'));
    }

    public function customBoxChange(Request $request){
        session()->put('box_id', $request->box_id);
        return response(session('box_id'));
    }

    public function customBoxProductSelect(Request $request){
 
        $variable = 'no';
        $id = $request->id;
        $qnt = $request->qnt;
        $data = []; 
        if(session('selected_product')){
            $data = session('selected_product');
        }  
        foreach($data as $data_key => $d){
            foreach($d as $key => $i){
                if($key == 'id' && $i == $id){ 
                    $variable = 'yes';
                    $index  = $data_key;
                } 
            }
        } 
        if ($variable == 'no') {
            $abc = ['id'=> $id, 'qnt' => $qnt];
            array_push($data,$abc);
        }
         else {
            unset($data[$index]);
        }  
        session()->put('selected_product', $data);
        return response(session('selected_product'));
    }

    public function customboxCartIndex(){ 

        $data = session('selected_product'); 
        if(session('box_id')){
            $box = session('box_id');
            $box_price = Product::find($box)->price;
            Cart::create([
                'product_id' => $box, 
                'qty'        => 1,
                'amount'     => $box_price,  
                'ip'         => request()->ip(),
            ]);
        }else{
            $box2 = Product::where('name', 'Your personalised box')->first();
            Cart::create([
            'product_id' => $box2->id, 
            'qty'        => 1,
            'amount'     => $box2->price,  
            'ip'         => request()->ip(),
            ]);
        }


        if($data){
            foreach($data as $d)
        {

            if(Cart::where('ip', request()->ip())->where('product_id', $d['id'])->exists()){
                
                Cart::where('ip', request()->ip())->where('product_id', $d['id'])->update([
                    'qty' => Cart::where('ip', request()->ip())->where('product_id', $d['id'])->first()->qty + $d['qnt'],
                    'amount' => Product::find($d['id'])->price * $d['qnt'],
        
                    ]);  
                }
              else 
              {
                  Cart::create([
                      'product_id' => $d['id'], 
                      'qty'        => $d['qnt'],
                      'amount'     => Product::find($d['id'])->price * $d['qnt'],  
                      'ip'         => request()->ip(),
                  ]);
                } 
                
        }
        }
            session()->pull('selected_product');
            session()->pull('box_id');
            return redirect()->route('cart.index'); 

    }

    public function customBoxCartRender(Request $request){
        $view = view('includes.custom_box_cart')->render();
        $data = session('selected_product');
        return response()->json(['view' => $view, 'data' => $data]);
    }

    public function customBoxQntUpdate(Request $request){
        $available = 'no';
        $id = $request->id;
        $qnt = $request->qnt; 
        $data = [];
        if(session('selected_product')){
            $data = session('selected_product');
            foreach($data as $data_key => $d){
                foreach($d as $key => $i){
                    if($key == 'id' && $i == $id){ 
                        $data[$data_key]['qnt'] = $qnt;
                        $available = 'yes'; 
                    } 
                }
            } 
            if($available == 'no'){
                $abc2 = ['id'=> $id, 'qnt' => $qnt];
                array_push($data,$abc2); 
            }
        }else{
            $abc = ['id'=> $id, 'qnt' => $qnt];
            array_push($data,$abc); 
        }  
        session()->put('selected_product', $data);
        return response(session('selected_product'));
    }


    public function contactUs()
    {

        return view('frontend.contact_us');
       
    }

    public function contactStore(Request $request){
        
        Contact::create($request->except('_token'));
        return response('success');
    }


    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.faq', compact('faqs'));
       
    }

    public function schedule(Request $request)
    {
        $data = PickupAddress::find($request->pickup_address);

        $opening = Carbon::parse($data->opening_hour); 
        $closing = Carbon::parse($data->closing_hour); 
        $schedules = CarbonInterval::minutes('30')->toPeriod($opening, $closing);   
        $view = view('includes.schedule')->with('schedules', $schedules)->render();
        return response()->json($view);

    }

 // END   
}
