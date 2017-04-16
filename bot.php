<?php
$access_token = '1rtphuwCd07x26RycF7MsBcvjlWeDzMB1NTlkVoh4+mS7r4sbn++VqxQu4r8VwQzQxYmHqRZt5plxmjgCutvZZXAE47GOcH5QSmVrHgs0fF8gfNQHQDq/apLXuxR/7FsnaIdHR4CryyTC6lDpeEGOQdB04t89/1O/w1cDnyilFU=';


$host = 'localhost:8080'; 
$user = 'root'; 
$pass = '';
$dbname = 'db_polling';
$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password);

echo "ok";
