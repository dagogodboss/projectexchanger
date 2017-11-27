<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccountDetails
{
    public function handle($request, Closure $next)
    {
        $fillable = [
        'surname',
        'username',
        'firstname',
        'phone_number',
        ];
        foreach($fillable as $fill_data){
            if(Auth::user()->$fill_data == null){
                return redirect('set-account/'.Auth::user()->hashId())->with('success', config('messages.fill_form'));
            }
        }
        return $next($request);
    }
}
