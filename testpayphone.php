<?php

    $token = "dkrnsA9w6-NtrtmXRwxPBsQHkVOZpEs8gGU5VaY7ZCcZJZ8G-UhI17imy6H13i46HjJ0J1wAE-C-s4gm3NuzVvs5yqyuiERkJtyalzjvuxFNXidErkjcHbB0ZXMl0wQQghm70zcs62BDHil8QV567Bbuakcb3rBvhnVZ3M0CHpni6U9TtOl2ZTgBaSijRDzyJFrZVpOyhyrXQKNkXBt8XoOisRF302LuhdA6GJSyCwjbn_a5mKjNxPy5guDgq5TDuLtF4mCZObdO22iPO8u2gcliy45sN5_tdGT3OHKM7HyUEdl51kLMfhy6yKKt0xpm5H8NRQ";
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://pay.payphonetodoesposible.com/api/button/Prepare');

    // Returns the data/output as a string instead of raw data
    

    $fields = array(
        "amount"=>  1, 
       "amountWithoutTax"=>  1, 
       "amountWithTax"=>  0, 
       "tax"=>  0, 
       "service"=>  0, 
       "tip"=>  0, 
       "currency"=>  "USD", 
       "timeZone"=>  0, 
       
       "clientTransactionId"=>  "4", 
       "responseUrl"=>  "http://innovatourclub.com/testpayphoneresp.php",
       "cancellationUrl"=>  "http://innovatourclub.com/testpayphonecancel.phpng", 
       "lang"=>  "esp", 
       
       "reference"=>  "874631", 
       "phoneNumber"=>  "+593996795991", 
       "email"=>  "a2daniel@hotmail.com", 
        );

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));
    
        
    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
        'Accept: application/json',
       'Authorization: Bearer ' . $token
       ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);
    
   $data=json_decode($data,true);
    $url=$data["payWithPayPhone"];

    // get info about the request
    $info = curl_getinfo($ch);

 
    
    // close curl resource to free up system resources
    curl_close($ch);
   echo "<a href='$url'>$url</a> ";
?>