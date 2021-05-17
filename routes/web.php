<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TwoFactorCodeController;

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

Route::view('/', 'index')->name('home');
Route::view('/account', 'account')->middleware(['auth', 'twofactor'])->name('account');

Route::get('/verify', function () {
    if (!auth()->user()->email_verification_code) {
        return redirect( route('account') );
    }
    return view('verify');
})->middleware('auth')->name('verify');

Route::post('/verify', [TwoFactorCodeController::class, 'verify']);

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect( route('verify') );
    }
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'LogIn']);

Route::get('/logout', function () {
    Auth::logout();
    return redirect( route('home') );
})->name('logout');

Route::get('/register', function () {
    if (Auth::check()) {
        return redirect( route('verify') );
    }
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'RegisterNewUser']);


