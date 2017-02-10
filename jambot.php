<?php 
$bot Token = "373015705:AAFtuEh7VylLWbDZi6_9fLsgxR6bkEAWETs" ;
&website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents(webstie."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
print_r($chatId);

?>