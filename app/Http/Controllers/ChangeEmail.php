<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChangeEmail extends Controller
{
   public function change(){
       $attributes = \request()->validate([
           'email' => 'required|email|max:255|unique:users,email',
       ]);
       $user = auth()->user();
       $user->email = $attributes['email'];
        $user->save();
       return redirect('/profile');
   }
}
