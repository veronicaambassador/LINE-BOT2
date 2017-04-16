<?php
$access_token = '1rtphuwCd07x26RycF7MsBcvjlWeDzMB1NTlkVoh4+mS7r4sbn++VqxQu4r8VwQzQxYmHqRZt5plxmjgCutvZZXAE47GOcH5QSmVrHgs0fF8gfNQHQDq/apLXuxR/7FsnaIdHR4CryyTC6lDpeEGOQdB04t89/1O/w1cDnyilFU='
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
