<?php

namespace App\Http\Controllers\Auth\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helper\Request\RequestHelper;
use App\Helper\Model\ModelInitializer;

class EmailAuthentication extends Controller
{
	protected $model;

	public function __construct(){
		$this->model = new ModelInitializer();
		$this->requests = new RequestHelper();
	}

    protected function resend_email(Request $request){
        $users = $this->model->user()->all();
        foreach($users as $user){
            if(hash('sha256', $user->id.config('app.salt')) == $request->uuid):
                $user->storeEmailToken()->sendEmailToken();
                   return redirect('change-email/'.$user->hashId())->with('reg_success', message('resend_email'));
            endif;
        }
    }
 
    protected function verify_email(Request $request){
    	$user = $this->model->user()->find($request->uuid);
    	if($user != null) {
    		if($user->emailmagictoken->isExpired()) {
    			return $this->requests->RequestNewToken($user); 
    		}
    		if($user->isValidated()){
    			return $this->requests->redirectTo('login', 'reg_success', config('messages.validated_email'));
    		}
    		return $this->runValidateUser($user, $request->token);
    	}else{
	    	return $this->requests->redirectTo('register', 'error', config('messages.do_register')) ;   
    	}
    }

    private function runValidateUser($user,$token){

    	if($user->emailmagictoken->email_token == $token){
    		$user->validateUser();
    		Auth::loginUsingId($user->id);
    		return redirect('set-account/'.$user->hashId())->with('success', config('messages.fill_form'));
    	}else{
	    	return $this->requests->RequestNewToken($user);
    	}
    }

    protected function change_email(Request $request){
    	$users = $this->model->user()->all();
    	foreach($users as $user){
    		if(hash('sha256', $user->id.config('app.salt')) == $request->uuid):
    			return view('auth.email.change_email', [
    				'user' => $user,
    			]);
    		endif;
    	}
    }

    protected function update_email(Request $request){
    	$this->validate($request, [
		'email' => 'required|string|email|max:255|unique:users',
    	]);
    	
    	$users = $this->model->user()->all();
    	foreach($users as $user){
    		if(hash('sha256', $user->id.config('app.salt')) == $request->uuid):
    			if($user->email != $request->oldemail):
    			   return back()->with('error', config('messages.NotOldEmail'));
    			endif;
    			if($user->emailmagictoken->validated){
    			   return back()->with('reg_error', config('messages.cantChangeEmail'));
    			}
    			if($user->update([
    			    	'email' => $request->email,
    			    ])):
					$user->storeEmailToken()->sendEmailToken();
    			   return back()->with('success', config('messages.email_changed'));
    			endif;
    		endif;
    	}
    }
}
