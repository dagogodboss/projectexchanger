<?php

namespace App\Http\Controllers\Auth\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helper\Request\RequestHelper;

class VerifyPhone extends Controller
{
	public function __construct(){
		$this->requests = new RequestHelper();
	}

    protected function show(Request $request){
    	if(LogUser()->isValidated()){
	    	return view('auth.account.verify.validate_phone_token');
    	}
    } 

    protected function verify(Request $request){
    	$this->validate($request,[
    		'phone_token' => 'required|digits:6',
    	]);
    	if(LogUser()->userPhoneToken() == $request->phone_token){
    		if(!LogUser()->phoneIsValidated()){
    			if(LogUser()->validatePhoneToken())
    				return $this->adminVerification(LogUser());
    		}
    		return $this->requests->redirectTo('verify-phone', 'error', message('isvalidated'));
    	}
    	return $this->requests->jsonResponse('error', message('wrong_token'), 500);
	}

	protected function adminVerification($user){
		if($user->isValidated() and $user->phoneIsValidated()){
			$user->waitAdminValidation();
			return $this->requests->jsonResponse('success', message('phoneIsValidated'));
		}
	}
}
