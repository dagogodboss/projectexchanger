<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'secret' => env('CAPTCHA_SECRET', '6Lf_-DkUAAAAAGIcEoM8LaEX6aafE5iRZMJ_kW-Z'),
    'sitekey' => env('CAPTCHA_SITEKEY', '6Lf_-DkUAAAAADUs64l7rTEn3odexDEk-pS5AdYY')
];