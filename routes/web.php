<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Never write custom actions

Route::middleware('restfull.access:admin')->group(function(){

    // Создать/удалить товар
    Route::post('/shop/product','ProductController@create');
    Route::delete('/shop/product/{id}','ProductController@destroy');
    
    // Поменять обложку товара
    // Tip 2. Treat properties edited independently as separate resources
    Route::put('/shop/product/{id}/cover-image','ProductCoverController@update');

});

//Заказать товар
Route::post('/shop/order/{product_id}','OrderController@create')->middleware('restfull.access:client');

Route::middleware('restfull.access:client')->group(function(){
    //Оставить отзыв к товару
    Route::post('/shop/feedback/{product_id}', 'FeedbackController@create');    
    //Получить список отзывов к товару
    Route::get('/shop/feedback/{product_id}', 'FeedbackController@list');
    
    //Поставить и отменить like для отзыва к товару
    Route::post('/shop/like/{product_id}','LikeController@create');
    Route::delete('/shop/like/{product_id}','LikeController@destroy');
    
    //Добавить товар в wishlist
    Route::post('/shop/wish-list/{product_id}','WishListController@create');
});


//Оплатить покупку, с возможностью использования нескольких платёжных систем (Apple Pay/Stripe/PayPal)
Route::middleware('restfull.access:client')->group(function(){
    
    Route::post('/shop/payment/apple-pay/{order_id}','Payment\ApplePayController@create');
    Route::get('/shop/payment/apple-pay/{order_id}','Payment\ApplePayController@show');
    
    Route::post('/shop/payment/stripe/{order_id}','Payment\StripeController@create');
    Route::get('/shop/payment/stripe/{order_id}','Payment\StripeController@show');
    
    Route::post('/shop/payment/pay-pal/{order_id}','Payment\PayPalController@create');
    Route::get('/shop/payment/pay-pal/{order_id}','Payment\PayPalController@show');
    
});
