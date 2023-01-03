<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PurchaseCrypto extends Controller
{
    public function buyCrypto()
    {
        $attributes = \request()->validate([
            'Symbol' => 'required|max:255',
            'Amount' => 'required|max:255|min:0.00001'
        ]);
        $attributes['user_Id'] = auth()->user()->getAuthIdentifier();
        dd($attributes);
        $attributes->save();


        }
}
