<?php 

function cartItems()
{
    return \App\Models\Cart::where('ip', request()->ip())->get();
}

function cartCount()
{
    return cartItems()->count();
}


function cartTotal()
{
    $subtotal = 0;
    foreach(cartItems() as $item)
    { 
        $subtotal +=  $item->amount; 
    }
    return round($subtotal, 2);
}

function categories()
{
    return \App\Models\Category::where('status', 'show')->orderBy('orderby', 'asc')->orderBy('name', 'asc')->get();
}



// General Settings
function generalsettings()
{
    return \App\Models\GeneralSetting::first();
}

// Social Icons Settings
function socialiconssettings()
{
    return \App\Models\SocialIconSetting::first();
}

// Color Settings
function colorSettings()
{
    return \App\Models\ColorSetting::first();
}

function checkSub($product_id, $subcat_id)
{
    return \App\Models\ProductSubcategory::where('product_id', $product_id)->where('subCategory_id', $subcat_id);
}

function paypalAPI()
{
    return \App\Models\PaypalSettings::first();
}
function theme($id)
{
    return \App\Models\ThemeSetting::where('user_id', $id)->first();
}

function pending()
{
    return \App\Models\Order::where('status', 'pending')->where('payment_status', 'paid')->get()->count();
}
function cancelled()
{
    return \App\Models\Order::where('status', 'cancelled')->get()->count();
}
function completed()
{
    return \App\Models\Order::where('status', 'completed')->get()->count();
}
function prods()
{
    return \App\Models\Product::count();
}
function earnings()
{
    return \App\Models\Order::where('status', 'paid')->sum('total_payable');
}

function getBoxSelect($id){
    if(session('box_id')){
        if(session('box_id') == $id){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function getSelectProduct($id){
    if(session('selected_product')){
        foreach(session('selected_product') as $data){
            foreach($data as $key => $i){
                if($key == 'id' && $i == $id){ 
                    return true;
                } 
            }
        }
    }else{
        return false;
    }
    return false;
}

function getProductQuantity($id){
    $index = '';
    if(session('selected_product')){
        foreach(session('selected_product') as $data_key => $data){
            foreach($data as $key => $i){
                if($key == 'id' && $i == $id){ 
                    return $data['qnt'];
                } 
            }
        } 
    }else{
        return 0;
    }
    return 0;
}

function getCustomTotal(){
    $total = 0;
    if(session('box_id')){
        $total += \App\Models\Product::find(session('box_id'))->price;
    }else{
        $product_price = \App\Models\Product::where('name', 'Votre box personnalisée')->first();
        $total += $product_price->price;
    }
    if(session('selected_product')){
        foreach(session('selected_product') as $data){
            $total += \App\Models\Product::find($data['id'])->price * $data['qnt'];
        } 
    }
    return number_format($total,2);
}

function slot()
{
    return \App\Models\PickupAddress::all();
}

//PaymentNumbers
function paymentNumber()
{
    return \App\Models\PaymentNumber::first();
}

// Check Permission 

function permissionCheck($user_id, $module)
{
   return  \App\Models\UserPermission::where('user_id', $user_id)->where('module', $module)->first();
}
