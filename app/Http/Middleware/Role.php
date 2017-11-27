<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    /**
     * Creates a new instance of the middleware.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $roles)
    {
        if ($this->auth->guest() || !$request->user()->hasRole($roles)) {
            abort(403)->with('error', 'You don\'t permission');
        }

        return $next($request);
    }
}