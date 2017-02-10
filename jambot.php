<?php 
$bot Token = "373015705:AAFtuEh7VylLWbDZi6_9fLsgxR6bkEAWETs" ;
&website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

//rint_r($updateArray);

//$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch ($message) {

case "/test":
sendmessage($chatId,"test");
break;
case "/hi":
sendMessage($chatId,"hey there!")
break;
default:
sendMessage($chatId,"default");
}
//file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId"&text=".urlencode($message);
file_get_contents($url);

}
?>
