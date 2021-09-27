<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Session;


// Route::get('/', function () {
//     return view('welcome');
// });

 Route::view('/login', 'login');
 Route::post('/login', [UserController::class,'login']);
 Route::get('/', [ProductController::class,'index']);
 Route::get('/details/{id}', [ProductController::class, 'details']);
 Route::get('/search', [ProductController::class, 'search']);
 Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
 Route::get('/logout', function(){
   Session::forget('user');
   return redirect('/login');
 });
 // Route::view('/product', [ProductController::class],'index');
 

// Route::group(['middleware'=>'UserAuth'], function(){
//  Route::view('/', 'master');
//  Route::view('/login', 'login');
//  Route::post('/login', [UserController::class,'login']);
// });


