<?php
$access_token = '1rtphuwCd07x26RycF7MsBcvjlWeDzMB1NTlkVoh4+mS7r4sbn++VqxQu4r8VwQzQxYmHqRZt5plxmjgCutvZZXAE47GOcH5QSmVrHgs0fF8gfNQHQDq/apLXuxR/7FsnaIdHR4CryyTC6lDpeEGOQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	echo $events;

}

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
echo $data;

echo file_get_contents('php://input');
