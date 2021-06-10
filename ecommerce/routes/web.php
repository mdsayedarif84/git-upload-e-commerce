<?php

use Illuminate\Support\Facades\Route;
//front-end rout//
Route::get('/',[
   'uses'=>'App\Http\Controllers\MyShopController@index',
    'as' =>'/'
]);
Route::get('/category-product',[
    'uses'=>'App\Http\Controllers\MyShopController@categoryProduct',
    'as' =>'category-product'
]);
Route::get('/mail-us',[
    'uses'=>'App\Http\Controllers\MyShopController@mailUs',
    'as' =>'mail-us'
]);
Route::get('/register',[
    'uses'=>'App\Http\Controllers\MyShopController@register',
    'as' =>'register'
]);
Route::get('/product-details',[
    'uses'=>'App\Http\Controllers\MyShopController@productDetails',
    'as' =>'product-details'
]);
Route::get('/shopping-cart',[
    'uses'=>'App\Http\Controllers\MyShopController@shoppingCart',
    'as' =>'shopping-cart'
]);
Route::get('/checkout',[
    'uses'=>'App\Http\Controllers\MyShopController@checkout',
    'as' =>'checkout'
]);
//Authentication file
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
