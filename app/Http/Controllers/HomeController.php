<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public static function index(){
        return view('home');
    }
    public static function register(){
        if (Auth::check()){
            return redirect(route('account'));
        }
        return view('register');
    }
    public function reg(RegisterRequest $request){
        $user = User::create($request->all());
        if ($user){
            Auth::login($user);
            return redirect(route('account'));
        }

    }
    public static function login(){
        if (Auth::check()){
            return redirect(route('account'));
        }
        return view('login');
    }
    public static function log(Request $req){
        $us = $req->only(['email','password']);
        $rem = $req->input('remember_my');
        if (Auth::attempt($us,$rem)){
            if(Auth::user()['is_admin'] == 0){
                return redirect('/');
            }else{
                return redirect(route('admin_home'));
            }
        }
        return redirect(route('login'))->withErrors([
            'email' => 'email or password not found'
        ]);
    }
}
