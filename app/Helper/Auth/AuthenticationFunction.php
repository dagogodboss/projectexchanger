<?php

namespace App\Helper\Auth;

use App\Helper\Model\ModelInitializer;

class AuthenticationFunction
{
	protected $models;

	public function __construct(){
		$this->models = new ModelInitializer();
	}

	public function generateToken($user){
		$user->storeEmailToken()->sendEmailToken();
	}
}