<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorCodeController extends Controller
{
    public function verify (Request $request) 
    {
        $request->validate([
            'email_verification_code' => 'required',
        ]);

        $user = auth()->user();

        if ($request->input('email_verification_code') == $user->email_verification_code) {
            $user->resetTwoFactorCode();
            return redirect()->route('account');
        }

        return redirect()->back()->withErrors([
            'email_verification_code' => 'The two factor code you have entered does not match'
        ]);   
    }
}
