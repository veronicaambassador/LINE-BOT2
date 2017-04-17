<?php
$access_token = '1rtphuwCd07x26RycF7MsBcvjlWeDzMB1NTlkVoh4+mS7r4sbn++VqxQu4r8VwQzQxYmHqRZt5plxmjgCutvZZXAE47GOcH5QSmVrHgs0fF8gfNQHQDq/apLXuxR/7FsnaIdHR4CryyTC6lDpeEGOQdB04t89/1O/w1cDnyilFU=';


$host = 'localhost'; 
$user = 'root'; 
$password = '';
$dbname = 'db_polling';
$connect = mysql_connect($host, $user, $password) or die(mysql_error());
echo "ok";
