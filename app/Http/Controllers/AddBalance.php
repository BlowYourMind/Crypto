<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddBalance extends Controller
{
    public function addBalance()
    {
        if (Balance::where('userId', '=', auth()->user()->getAuthIdentifier())->exists()) {
            $d = Balance::where('userId', '=', auth()->user()->getAuthIdentifier())->first();
            $d->balance += \request()->all()['money'];
            $d->paymentType = \request()->all()['paymentType'];
            $d->save();
        } else {
            $money = \request()->all();
            $balance = new Balance([
                'userId' => auth()->user()->getAuthIdentifier(),
                'balance' => $money['money'],
                'paymentType' => $money['paymentType']
            ]);
            $balance->save();
        }
        return redirect('/');
    }

}
