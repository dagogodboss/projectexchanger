<?php

namespace App\Auth\Token;

use App\Notifications\Auth\EmailVerificationToken;

trait TokenTrait{

	public function emailmagictoken(){
        return $this->hasOne('App\EmailMagicToken');
    }

    public function phonemagictoken(){
        return $this->hasOne('App\Auth\PhoneMagicToken');
    }

    public function adminverification(){
    	return $this->hasOne('App\Admin\Verification');
    }

    public function UpdateEmailToken(){
    	$this->emailmagictoken->email_token = str_random(266);
    	$this->emailmagictoken->save();
    	return $this;
    }

    public function waitAdminValidation(){
    	$this->adminverification()->delete();
    	$this->adminverification()->create();
    }

    public function hashId(){
    	return hash('sha256',$this->id.config('app.salt'));
    }

	public function storeEmailToken(){
		$this->emailmagictoken()->delete();
		$this->emailmagictoken()->create([
			'email_token' => str_random(266),
		]);
		return $this;
	}

	public function sendEmailToken(){
		$this->notify(new EmailVerificationToken($this));
	}

	public function storePhoneToken(){
		$this->phonemagictoken()->delete();
		$this->phonemagictoken()->create([
			'phone_token' => $this->generateToken(),
			]);
		return $this;
	}

	public function sendPhoneToken(){
		
		//$this->notify(new )
		//dd($this->phonemagictoken->phone_token);
	}

	public function isValidated(){
		return $this->emailmagictoken->validated;
	}

	public function userPhoneToken(){
		return $this->phonemagictoken->phone_token;
	}

	public function phoneIsValidated(){
		return $this->phonemagictoken->validated;
	}

	public function validatePhoneToken(){
		$this->phonemagictoken->validated = 1;
		if($this->phonemagictoken->save())
			return true;
	}

	public function validateUser(){
		$this->emailmagictoken->validated = 1;
		$this->emailmagictoken->save();
	}

	public function generateToken(){
		return rand(00000, 999999);
	}
}