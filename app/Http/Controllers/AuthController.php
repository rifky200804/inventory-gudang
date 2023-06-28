<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($request->only('username','password'))){
            return redirect()->route('dashboard');
        };
        return redirect()->route('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
