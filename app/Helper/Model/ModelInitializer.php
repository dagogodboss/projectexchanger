<?php

namespace App\Helper\Model;

use App\User;
use App\EmailMagicToken;
use App\Auth\PhoneMagicToken;

class ModelInitializer
{
	protected $user, $emailtoken, $phonetoken; 

	public function __construct(){
		$this->user = new User();
		$this->emailtoken = new EmailMagicToken();
		$this->phonetoken = new PhoneMagicToken();
	}

	public function user() {
		return $this->user;
	}

	public function emailtoken(){
		return $this->emailtoken;
	}

	public function phonetoken(){
		return $this->phonetoken;
	}
}