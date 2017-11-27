<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Helper\Auth\AuthenticationFunction;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    

    use RegistersUsers;

    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
        $this->auth_helper = new AuthenticationFunction();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response' => 'required|captcha'
        ]);
    }
    protected function create(array $data)
    {
        $user = $this->insertUser($data);
                $this->ValidateWithEmailToken($user);
        return $user; 
    }

    private function insertUser($data){
       $user =  User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
       return $user;
    }

    private function ValidateWithEmailToken($user){
        $this->auth_helper->generateToken($user);
    }
}
