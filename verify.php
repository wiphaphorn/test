<?php
$access_token = 'lEwkntIRKIdyp2qaLw6dgjzBej/CsxrAeM6Qljzl8jVJNDv6Z/130dml9x5VZ4K3QFfzu+mgVNatW599+7J2CdHtbAevtiXjjbfT0YY1vB6J3bMQdekdc5RSnuYCfhyVFafpg3ht7VFu6a7EPBLWAwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
