<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ColorSettingController;
use App\Http\Controllers\CustomBoxController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\PaypalSettingsController;
use App\Http\Controllers\PickupAddressController;
use App\Http\Controllers\SocialIconSettingController;
use App\Http\Controllers\ProductSubcategoryController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\PaymentNumberController;
use App\Http\Controllers\DeliveryPolicyController;
use App\Models\DeliveryPolicy;
use DansMaCulotte\Monetico\Resources\ShippingAddressResource;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\ProductColorController;



// Route::get('/', function () {
//     return view('welcome');
// });

// FrontendController
// Route::group(['middleware' => ['visitor_log']], function(){

    Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
    Route::get('/products', [FrontendController::class, 'products'])->name('frontend.products');
    Route::get('/products/{name}', [FrontendController::class, 'productsbycategory'])->name('frontend.productsbycategory');
    Route::get('/product-sub-cat-{name}/{id}/products', [FrontendController::class, 'productsbysubcategory'])->name('frontend.productsbysubcategory');
    Route::get('/product-details-{slug}', [FrontendController::class, 'productDetails'])->name('frontend.details');
    Route::get('/blog-list', [FrontendController::class, 'blogList'])->name('frontend.blogList');
    Route::get('/blog-details/{id}', [FrontendController::class, 'blogdetails'])->name('frontend.blogDetails');
    Route::get('/search', [FrontendController::class, 'search'])->name('frontend.search');
    Route::post('/search-by-price', [FrontendController::class, 'searchbyprice'])->name('frontend.searchbyprice');
    Route::get('/quick-view/{id}', [FrontendController::class, 'quickview'])->name('frontend.quickview');
    Route::get('/wish-list', [UserController::class, 'wishList'])->name('frontend.wishList');
    Route::get('/custom-box', [FrontendController::class, 'CustomBox'])->name('product.custom.box');
    Route::resource('wishlists', WishlistController::class);

    Route::post('custom-box-change', [FrontendController::class, 'customBoxChange'])->name('custom.box.change');
    Route::post('custom-box-product-select', [FrontendController::class, 'customBoxProductSelect'])->name('custom.box.product.select');
    Route::get('custombox-cart-index', [FrontendController::class, 'customboxCartIndex'])->name('custombox.cart.index');
    Route::post('custom-box-cart-render', [FrontendController::class, 'customBoxCartRender'])->name('custom.box.cart.render');
    Route::post('custom-box-qnt-update', [FrontendController::class, 'customBoxQntUpdate'])->name('custom.box.qnt.update');

    Route::get('/user-dashboard', [UserController::class, 'userDashboard'])->name('frontend.userDashboard');
    Route::get('/my-orders', [UserController::class, 'myOrders'])->name('frontend.myOrders');
    Route::post('/change-password', [UserController::class, 'changepass'])->name('frontend.password');
    Route::any('/message', [UserController::class, 'message'])->name('frontend.message');
    Route::any('/privacy-policy', [UserController::class, 'privacy_policy'])->name('frontend.privacy_policy');
    Route::any('/terms_condition', [UserController::class, 'terms_condition'])->name('frontend.terms_condition');
    

    // CustomLoginController 
    Route::post('/custom-login', [CustomLoginController::class, 'login'])->name('custom.login');
    Route::post('/custom-register', [CustomLoginController::class, 'register'])->name('custom.register');

    // CartController 
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart-store', [CartController::class, 'store'])->name('cart.store');
    Route::any('/cart-destroy/{id}', [CartController::class, 'delete'])->name('cart.destroy');
    Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.custom.update');

    // CheckoutController 
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout-store', [CheckoutController::class, 'store'])->name('checkout.store');

    //BuyNowController
    Route::get('buynow/{id}',[BuyNowController::class,'index'])->name('buynow.index');
    Route::get('/select-color',[BuyNowController::class,'selectColor'])->name('select.color');

    Route::get('/monetico', [CheckoutController::class, 'monetico'])->name('checkout.monetico');

    Route::get('/thanks', function(){
       echo "return url for monetico";
    }); 
    // Route::get('/oops', function(){
    //     echo "oops";
    // });

    Route::get('/demander-un-devis/{id}', [ProductController::class, 'rq'])->name('rq');

    // QuoteController
    Route::post('/quotes-store', [QuoteController::class, 'store'])->name('quotes.store');

    Route::get('/contact-us',[FrontendController::class, 'contactUs'])->name('contact.us');
    Route::post('/contact-store',[FrontendController::class, 'contactStore'])->name('contact.store');
    Route::get('/faq',[FrontendController::class, 'faq'])->name('frontend.faq');

// });

 // Get Schedule 
 Route::post('get/schedule', [FrontendController::class, 'schedule'])->name('schedule.pickup');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('layouts.dashboard');
// })->name('dashboard');

// Admin Group Route
    //PDFController
    Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generatePDF');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkAdmin']], function(){

    // AdminController
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('user-list', [AdminController::class, 'userList'])->name('user.index');
    Route::get('admin-list', [AdminController::class, 'adminList'])->name('admin.index');
    Route::get('user-details/{id}', [AdminController::class, 'userDetails'])->name('user.details');
    Route::get('user-delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
    Route::get('theme-settings', [AdminController::class, 'theme'])->name('theme');
    Route::get('theme-nav-settings', [AdminController::class, 'themenav'])->name('theme-nav');
    Route::get('profile-settings', [AdminController::class, 'profile'])->name('profile.settings');
    Route::post('/update-profile-photo/{id}', [AdminController::class, 'profilePhoto'])->name('profile.photo');
    Route::post('/update-profile-password/{id}', [AdminController::class, 'profilePassword'])->name('profile.password');
    Route::get('contact-index', [AdminController::class, 'contactIndex'])->name('contact.index');
    Route::post('contact-message-delete', [AdminController::class, 'contactMessageDelete'])->name('contact.message.delete');
    Route::post('add-admin', [AdminController::class, 'addAdmin'])->name('add.admin');
    Route::post('add-permission', [AdminController::class, 'addPermission'])->name('add.permission');

    
    // BannerController
    Route::resource('banners', BannerController::class);

    // CategoryController
    Route::get('category-status/{id}',[CategoryController::class, 'status'])->name('categories.status');
    Route::resource('categories', CategoryController::class);
    Route::post('category-order-change', [CategoryController::class, 'categoryOrderChange'])->name('category.order.change');
    Route::post('category-status-change', [CategoryController::class, 'categoryStatusChange'])->name('category.status.change');
    Route::post('get-sub-categories', [CategoryController::class, 'getSubCategories'])->name('getSubCategories');
    Route::post('tendance-derniers-change', [CategoryController::class, 'tendanceDerniersChange'])->name('tendance.derniers.change');
    
    // SubCategoryController
    Route::get('subcategory-status/{id}',[SubCategoryController::class, 'status'])->name('subCategories.status');
    Route::resource('subCategories', SubCategoryController::class);

    Route::resource('productSubcategories', ProductSubcategoryController::class);
    
    // ProductController
    Route::post('get-sub-category', [ProductController::class, 'getsubcategory'])->name('getsub');

    // Product MultipleImages
    Route::get('update-multiple-image/{id}/update', [ProductController::class, 'updateMultiple'])->name('update.multiple');
    Route::post('replace-multiple-image/replace', [ProductController::class, 'replaceMultiple'])->name('replace.multiple');
    Route::post('delete-multiple-image/{id}/delete', [ProductController::class, 'deleteMultiple'])->name('delete.multiple');
    Route::get('/allproducts', [ProductController::class, 'fetchData']);

    // Product Sizes
    Route::get('/edit/{id}/size', [ProductController::class, 'editSize'])->name('edit.size');
    Route::post('/update/size', [ProductController::class, 'updateSize'])->name('update.size');
    Route::post('/delete/{id}/size', [ProductController::class, 'deleteSize'])->name('delete.size');

    // Product Colors
    Route::get('/edit/{id}/color', [ProductController::class, 'editColor'])->name('edit.color');
    Route::post('/update/color', [ProductController::class, 'updateColor'])->name('update.color');
    Route::post('/product-color/store',[ProductController::class,'storeColor'])->name('productColor.store');
    // Route::post('/delete/{id}/color', [ProductController::class, 'deleteColor'])->name('delete.color');

    Route::get('/add-product-color',[ProductController::class,'addProductColor'])->name('productColor.add');

    Route::get('product-status/{id}',[ProductController::class, 'status'])->name('products.status');
    Route::resource('products', ProductController::class);
    Route::get('/custom_box', [CustomBoxController::class, 'customBoxIndex'])->name('custom_box.index');
    Route::get('/custom_box/create', [CustomBoxController::class, 'customBoxCreate'])->name('custom_box.create');
    Route::post('custom_box/store', [CustomBoxController::class, 'customBoxStore'])->name('custom_box.store');
    Route::get('custom_box/status/{id}', [CustomBoxController::class, 'customBoxStatus'])->name('custom_box.status');
    Route::post('custom_box/destroy', [CustomBoxController::class, 'customBoxDestroy'])->name('custom_box.destroy');
    Route::get('custom_box/edit/{id}', [CustomBoxController::class, 'customBoxEdit'])->name('custom_box.edit');
    Route::get('custom_box/show/{id}', [CustomBoxController::class, 'customBoxShow'])->name('custom_box.show');
    Route::post('custom_box/update', [CustomBoxController::class, 'customBoxUpdate'])->name('custom_box.update');
    Route::post('custom-box-status-change', [CustomBoxController::class, 'customBoxStatusChange'])->name('custom.box.status.change');

    // BlogCategoryController
    Route::get('/edit-blogs-gallery-images/{id}', [BlogController::class, 'editBlogMultiple'])->name('edit.blogmultiple');
    Route::post('/update-blogs-gallery-images', [BlogController::class, 'updateBlogMultiple'])->name('update.blogmultiple');
    Route::post('/delete-blogs-gallery-images/{id}', [BlogController::class, 'deleteBlogMultiple'])->name('delete.blogmultiple');

    Route::resource('blogCategories', BlogCategoryController::class);

    // BlogController
    Route::resource('blogs', BlogController::class);

    // FaqController 
    Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::get('/faq-create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq-store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq-view/{id}', [FaqController::class, 'view'])->name('faq.view');
    Route::get('faq-edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('faq-update', [FaqController::class, 'update'])->name('faq.update');
    Route::post('faq-destroy', [FaqController::class, 'destroy'])->name('faq.destroy');

    // SocialIconSettingController
    Route::resource('socialIconSettings', SocialIconSettingController::class);

    // SocialIconSettingController
    Route::resource('generalSettings', GeneralSettingController::class);

    // CouponController 
    Route::resource('coupons', CouponController::class);

    // ColorSettingController 
    Route::resource('colorSettings', ColorSettingController::class);

    //PaymentNumberController
    Route::get('/payment-number',[PaymentNumberController::class,'index'])->name('paymentNumbers.index');
    Route::post('/update-payment-number/{id}',[PaymentNumberController::class,'updateNumber'])->name('update.payment.numbers');
   

    //DeliveryPolicyController
    Route::get('/delivery_policy',[DeliveryPolicyController::class,'index'])->name('deliveryPolicy.index');
    Route::post('/delivery/policy/{id}',[DeliveryPolicyController::class,'update'])->name('deliveryPolicy.update');
    Route::get('/all_delivery_policies',[DeliveryPolicyController::class,'allDeliveryPolicies'])->name('dliveryPolicy.allPolicies');

    // PayPalSettingsController 
    Route::get('/paypal-settings', [PaypalSettingsController::class, 'index'])->name('paypal.index');
    Route::post('/delivery-policy/store',[DeliveryPolicyController::class,'store'])->name('delivery.policy.store');
    Route::post('/paypal-settings-store', [PaypalSettingsController::class, 'store'])->name('paypal.store');

    // AdminOrderController 
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('order.index');
    Route::get('/order-completed/{id}', [AdminOrderController::class, 'completed'])->name('order.completed');
    Route::get('/order-cancelled/{id}', [AdminOrderController::class, 'cancelled'])->name('order.cancelled');

    // ShippingController
    Route::get('/shipping-lists', [ShippingController::class, 'index'])->name('shipping.index');
    Route::post('/shipping-store', [ShippingController::class, 'store'])->name('shipping.store');
    Route::post('/shipping-update', [ShippingController::class, 'update'])->name('shipping.update'); 
    Route::get('/shipping-destroy/{id}', [ShippingController::class, 'destroy'])->name('shipping.destroy');

    // QuotesController
    Route::get('/quotes', [QuoteController::class, 'index'])->name('quotes.index');
    Route::get('/quotes-delete/{id}', [QuoteController::class, 'destroy'])->name('quotes.destroy');

    // PickupAddressController 
    Route::resource('pickups', PickupAddressController::class);

    //ProductColorController
    Route::get('/add-product-color/{id}',[ProductColorController::class,'index'])->name('add.product.color');
    Route::post('/product-color-image',[ProductColorController::class,'store'])->name('productColorImage.store');
});

// OrderController 
Route::post('order-store', [OrderController::class, 'store'])->name('order.store');

Route::post('/api/paypal-capture-payment', [OrderController::class, 'capturePayment']);

Route::get('/pay-success', [OrderController::class, 'success'])->name('pay.success');

Route::get('/pay-failed', [OrderController::class, 'failed']);

 // SubscriptionController 
 Route::resource('subscriptions', SubscriptionController::class);

