<?php
$ipaddress = $_SERVER['REMOTE_ADDR'];
$webpage = $_SERVER['SCRIPT_NAME'];
$timestamp = date('m/d/Y h:i:s');
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'] . PHP_EOL;
file_put_contents("ip.txt", " 
 VISITOR: $timestamp | $browser | $ipaddress | $webpage | $ip", FILE_APPEND);
echo "Your ip $ip has been logged."
?>