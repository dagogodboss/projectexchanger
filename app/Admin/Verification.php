<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $fillable = [
    	'user_id',
    	'verify',
    ];
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function unverified(){
    	return $this->where('verify', 0)->get();
    }
}
