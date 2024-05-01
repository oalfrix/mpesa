<?php

$consumerKey = "";
$consumerSecret = "";

$access_token_url = '';
$headers = [''];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . 'i' $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_C0DE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);