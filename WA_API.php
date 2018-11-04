<?php

for($i = 0; $i < 5; $i++){
$my_apikey = "7RKDWT5Y9U1UPLU3DB1X"; 
$destination = "62815393793245"; 
$message = $i; 
$api_url = "http://panel.apiwha.com/send_message.php"; 
$api_url .= "?apikey=". urlencode ($my_apikey); 
$api_url .= "&number=". urlencode ($destination); 
$api_url .= "&text=". urlencode ($message); 
$my_result_object = json_decode(file_get_contents($api_url, false)); 
echo "<br>Result: ". $my_result_object->success; 
echo "<br>Description: ". $my_result_object->description; 
echo "<br>Code: ". $my_result_object->result_code; 
}
?>
