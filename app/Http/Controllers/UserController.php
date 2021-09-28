<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where(['email'=>$req->email])->first();
        if($user && Hash::check($req->password, $user->password)){
            $req->session()->put('user', $user);
            return redirect('/');
        } 
        
    }

    function register(Request $req){
        $req->validate([
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3',

        ]);

        $user = new User;
        $user->name= $req->input('name');
        $user->email= $req->input('email');
        $user->password= Hash::make($req->input('password'));
        $user->save();
        $req->session()->put('user', $user);
        return redirect('/');
    }
}
