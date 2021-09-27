<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    //
    function index(){
        $productData = Product::all();
        return view('product', ['productData'=>$productData]);
   
    }

    function details($id){
        $data = Product::find($id);
        return view('detail', ['productDetails'=>$data]);
    }

    function search(Request $req){
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['searchedData'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItems(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
}
