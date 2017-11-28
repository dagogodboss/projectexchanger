<?php

namespace App;

use App\Auth\Token\TokenTrait;
use Illuminate\Notifications\Notifiable;
use App\SiteTrait\User\UserTrait as ModelRelator;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, TokenTrait, ModelRelator;

   protected $fillable = [
        'email', 
        'surname', 
        'password',
        'username', 
        'birthday', 
        'bank_name',
        'firstname',
        'middlename',
        'account_pin',
        'phone_number',
        'account_name',
        'account_number',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];    
}
