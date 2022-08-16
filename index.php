<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.instagram.com/web/search/topsearch/?query=ary_n10',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 14_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.1 Mobile/15E148 Safari/604.1',
    'Host: www.instagram.com',
    'Connection: keep-alive',
    'Cookie: csrftoken=3qbHosza3XRryOLpojy2zKoCR9U4cZAl; ig_did=ACC09A17-FBE4-483E-BC0F-F503294A8D51; ig_nrcb=1; mid=YuPKhwAEAAGo4k8KSbatWz6A0KKu'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
