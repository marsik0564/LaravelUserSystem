<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
// use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function RegisterNewUser (RegisterRequest $register_request) {
        $user_information = $register_request->only([
            'login', 
            'name', 
            'birthday', 
            'email', 
            'address', 
            'city', 
            'state', 
            'country', 
            'password',
        ]);
        $new_user = User::create($user_information);
        if ($new_user) {
            return redirect()->route('home')->with('success', 'Registration was successful');
        }

        return redirect()->back()->withErrors('formError', 'Registration error occured');
    }
}
