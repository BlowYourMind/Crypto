<?php

namespace App\Http\Controllers;

use App\Models\User;
class RegisterController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $attributes = \request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);
        $attributes['password']=password_hash($attributes['password'],PASSWORD_DEFAULT);
       $user = User::create($attributes);
        auth()->login($user);

        return redirect('/');
    }
}
