<?php

namespace App\Http\Controllers;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(){
        $attributed = \request()->validate([
       'email'=>'required|email',
        'password'=>'required'
    ]);

    if(auth()->attempt($attributed)){
        session()->regenerate();
    return redirect('/home');
    }
    return back()->withInput()->withErrors(['email'=>'Login or password is incorrect']);
    }
}
