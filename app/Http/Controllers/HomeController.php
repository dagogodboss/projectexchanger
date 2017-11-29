<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('account_details');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('clicked');
        return view('home');
    }

    public function logout(){
        if(\Auth::logout()){
            return redirect('/')->with('success', 'Thank You very much. Please come back again');
        }
            return redirect('/')->with('success', 'Thank You very much. Please come back again');
    }
}
