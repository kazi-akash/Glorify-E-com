<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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

    function cartList(){
        $user = Session::get('user')['id'];
        $cartProduts = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $user)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        return view('cartlist', ['cartProduts'=>$cartProduts]);
    }

    function deleteItem($id){
        // Cart::where('id', $id)->delete();
        Cart::destroy($id);
        return redirect('/cart');
        
    }

    function checkout(){
        $user = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $user)
        ->select('products.*')
        ->get();
        return view('checkout', ['products'=>$products]);
    }

    function payment(Request $req){
        $req->validate([
            'number'=> 'required',

        ]);
        $user = Session::get('user')['id'];
        $cartData = Cart::where('user_id', $user)->get();
        foreach($cartData as $item){
            $order = new Order;
            $order->product_id= $item['product_id'];
            $order->user_id= $item['user_id'];
            $order->status= 'pending';
            $order->payment_method= $req->method;
            $order->address= $req->input('address');
            $order->number= $req->number;
            $order->save();
            Cart::where('user_id', $user)->delete();
        }
        return redirect('/orders');
    }

    function orders(){
        $user = Session::get('user')['id'];
        $products = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $user)
        ->get();
        if(!$user){
            return redirect('/login');
        }
        return view('orders', ['orderProducts'=> $products]);
        // return $products;
    }
}
