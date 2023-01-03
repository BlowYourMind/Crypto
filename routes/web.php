<?php

use App\Http\Controllers\AddArticle;
use App\Http\Controllers\AddBalance;
use App\Http\Controllers\AddCryptoData;
use App\Http\Controllers\ChangeEmail;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaseCrypto;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShowProfile;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('register', [RegisterController::class , 'create'])->middleware('guest');
Route::post('register', [RegisterController::class , 'store'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout'])->middleware('auth');
Route::get('login', [LoginController::class, 'login'])->middleware('guest');
Route::post('login', [LoginController::class, 'auth'])->middleware('guest');
Route::post('addArticle', [AddArticle::class, 'insert'])->middleware('auth');
Route::get('home', [AddCryptoData::class, 'show'])->middleware('auth');
Route::get('profile', [ShowProfile::class, 'show'])->middleware('auth');
Route::get('changeEmail', [ChangeEmail::class, 'change'])->middleware('auth');
Route::get('changePassword', [ChangePassword::class, 'change'])->middleware('auth');
Route::get('addMoney', [AddBalance::class, 'addBalance'])->middleware('auth');
Route::get('purchaseCrypto', [PurchaseCrypto::class, 'buyCrypto'])->middleware('auth');

