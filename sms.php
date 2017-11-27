$msg = urlencode('Hello '.$user->name.','.PHP_EOL.config('app.phone_token_msg'). ' '.$user->phone_number_token.'.'.PHP_EOL.'Join our telegram '.PHP_EOL.config('app.telegramlink'));
         $link = 'http://portal.bulksmsnigeria.net/api/?username=sms@swifterz.com&password=henry12510&message='.$msg.'&sender='.urlencode(config('app.sender')).'&mobiles='.urlencode($user->phone_number);
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $link);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         $result = curl_exec($ch);
         if (curl_errno($ch)){
             echo 'Error:' . curl_error($ch);
         }else{
            \Log::info($result);
            return true;
         }
         curl_close ($ch);