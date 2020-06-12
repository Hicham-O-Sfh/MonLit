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

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/cart',function(){
    return view('cart');
});

Route::get('/category',function(){
    return view('category');
});

Route::get('/checkout',function(){
    return view('checkout');
});

Route::get('/confirmation',function(){
    return view('confirmation');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/element',function(){
    return view('element');
});

Route::get('/features',function(){
    return view('features');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/single-blog',function(){
    return view('single-blog');
});

Route::get('/single-product',function(){
    return view('single-product');
});

Route::get('/tracking',function(){
    return view('tracking');
});

// 



