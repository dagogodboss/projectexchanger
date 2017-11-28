<?php

use App\Helpers\General\HtmlHelper;

if (! function_exists('app_name')) {
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('powered_by')) {
    function powered_by()
    {
        return 'Powered By Pheelz.';
    }
}

if (! function_exists('api')) {
    /**
     * Helper to grab the application api used in the site.
     *
     * @return mixed
     */
    function api($value)
    {
        return config('api.'.$value);
    }
}

if (! function_exists('message')) {
    /**
     * Helper to grab the application messages.
     *
     * @return mixed
     */
    function message($value)
    {
        return config('messages.'.$value);
    }
}

if (! function_exists('LogUser')) {
    /**
     * Helper to grab the application Log In User.
     *
     * @return mixed
     */
    function LogUser()
    {
        return Auth::user();
    }
}
