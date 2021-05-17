<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\TwoFactorCodeNotification;
use Auth;

class LoginController extends Controller
{
    public function LogIn(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $formFields = $request->only(['login', 'password']);

        if (Auth::attempt($formFields))  {
            return $this->authenticated($request, auth()->user());
        }

        return redirect()->back()->withErrors('input data is incorrect');
    }

    protected function authenticated(Request $request, $user)
    {
        $user->generateTwoFactorCode();
        $user->notify(new TwoFactorCodeNotification());

        return redirect()->intended('verify');
    }
}
