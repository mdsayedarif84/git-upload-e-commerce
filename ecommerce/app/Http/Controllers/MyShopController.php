<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyShopController extends Controller{
    public function index(){
        return view('front-end.home.home');
    }
    public function categoryProduct(){
        return view('front-end.category.category-product');
    }
    public function mailUs(){
        return view('front-end.mail.mail-us');
    }
    public function register(){
        return view('front-end.register.register');
    }
    public function productDetails(){
        return view('front-end.product-details.product-details');
    }
    public function shoppingCart(){
        return view('front-end.cart.shopping-cart');
    }
    public function checkout(){
        return view('front-end.checkout.checkout');
    }
}
