<?php

namespace App\Http\Controllers\Auth\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helper\Model\ModelInitializer;

class SetAccount extends Controller
{
    protected $model;

	public function __construct(){
		$this->model = new ModelInitializer();
	}

	protected function set_account(Request $request){
		if(Auth::user()->emailmagictoken->validated):
			return view('auth.account.set-account');
		endif;
	}

	protected function update_account(Request $request){
		$this->validate($request,[
			'firstname' 	=> 'required|min:3|alpha',
			'surname' 		=> 'required|min:3|alpha',
			'middlename' 	=> 'min:3|alpha',
			'username' 		=> 'required|min:3|unique:users',
			'birthday' 		=> 'required|date',
			'phone_number' 	=> 'required|digits:11',
			'bank_name'   	=> 'required|min:6',
			'account_name'  => 'required|min:6|string',
			'account_number'=> 'required|digits:10',
			'account_pin'   => 'required',
		]);
		if(LogUser()->update($request->all())):
			LogUser()->storePhoneToken()->sendPhoneToken();
			return redirect('verify-phone')->with('reg_success', config('messages.account_details'));	
		endif;
	}
}
