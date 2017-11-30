<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated($request, $user)
    {
        if($user->emailmagictoken()->first() != null){
            if(!$user->emailmagictoken->validated){
    return $this->invalidEmail($request, 'Sorry you have not validated your email.', $user);
            }
        }
    }

    public function invalidEmail($request, $msg, $user){
        $this->guard()->logout();
        $request->session()->invalidate();
        return back()->with(['login_error' => $msg, 'user' => $user->hashId()]);
    }
}
