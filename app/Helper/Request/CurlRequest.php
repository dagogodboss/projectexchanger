<?php

namespace App\Helper\Request;

use Ixudra\Curl\Facades\Curl;

class CurlRequest{
	public function getWithData($link, $value = array()){
		$response = Curl::to($link)
        ->withData($value)
        ->get();
        return $response;
	}
}