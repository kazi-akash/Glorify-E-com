<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::view('/', 'master');
 Route::view('/login', 'login');
 Route::post('/login', [UserController::class,'login']);

// Route::group(['middleware'=>'UserAuth'], function(){
//  Route::view('/', 'master');
//  Route::view('/login', 'login');
//  Route::post('/login', [UserController::class,'login']);
// });


