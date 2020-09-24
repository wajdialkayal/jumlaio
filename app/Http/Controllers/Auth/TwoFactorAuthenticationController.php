<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCodeNotification;
use Illuminate\Http\Request;

class TwoFactorAuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }


    public function index()
    {
        return view('auth.two-factor-authentication');
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'integer|required',
        ]);

        $user = $request->user();

        if ($user->two_factor_expires_at->gt(now())) {
            if ($request->input('two_factor_code') == $user->two_factor_code) {

                $user->resetTwoFactorCode();
                if($user->email_alert){
                   $user->sendLoginAlert();
                }
                return redirect()->route('home');
            }
            return back()->with('error', __('The two factor code you have entered does not match'));
        }
        return redirect()->route('login')
            ->withError('The two factor code has expired. Please login again.');
    }

    public function resend(Request $request)
    {
        $user = $request->user();
        $user->generateTwoFactorCode();
        $user->notify(new TwoFactorCodeNotification());

        return redirect()->back()->withMessage('The two factor code has been sent again');
    }
}
