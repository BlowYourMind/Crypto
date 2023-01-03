<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePassword extends Controller
{
    public function change(){
        $attributes = \request()->validate([
            'password' => 'required|max:255',
        ]);
        $attributes['password']=password_hash($attributes['password'],PASSWORD_DEFAULT);
        $user = auth()->user();
        $user->password = $attributes['password'];
        $user->save();

        return redirect('/profile');
    }
}
