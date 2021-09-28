<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Session;


// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::view('/login', 'login');
//  Route::post('/login', [UserController::class,'login']);
//  Route::view('/register', 'register');
//  Route::post('/register', [UserController::class, 'register']);
//  Route::get('/', [ProductController::class,'index']);
//  Route::get('/details/{id}', [ProductController::class, 'details']);
//  Route::get('/search', [ProductController::class, 'search']);
//  Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
//  Route::get('/logout', function(){
//    Session::forget('user');
//    return redirect('/login');
//  });
//  Route::get('/cart', [ProductController::class, 'cartList']);
//  Route::get('/deleteitem/{id}', [ProductController::class, 'deleteItem']);
//  Route::get('/checkout', [ProductController::class, 'checkout']);
//  Route::post('/payment', [ProductController::class, 'payment']);
//  // Route::view('/product', [ProductController::class],'index');
//  Route::get('/orders', [ProductController::class, 'orders']);


Route::group(['middleware'=>'web'], function(){
 Route::view('/login', 'login');
 Route::post('/login', [UserController::class,'login']);
 Route::view('/register', 'register');
 Route::post('/register', [UserController::class, 'register']);
 Route::get('/', [ProductController::class,'index']);
 Route::get('/details/{id}', [ProductController::class, 'details']);
 Route::get('/search', [ProductController::class, 'search']);
 Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
 Route::get('/logout', function(){
   Session::forget('user');
   return redirect('/login');
 });
 Route::get('/cart', [ProductController::class, 'cartList']);
 Route::get('/deleteitem/{id}', [ProductController::class, 'deleteItem']);
 Route::get('/checkout', [ProductController::class, 'checkout']);
 Route::post('/payment', [ProductController::class, 'payment']);
 // Route::view('/product', [ProductController::class],'index');
 Route::get('/orders', [ProductController::class, 'orders']);
});


