<?php
$to = "babankbro@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: babankbro@gmail.com" . "\r\n" .
"CC: babankbro@gmail.com";

$result = mail($to,$subject,$txt,$headers);
echo $result. "    end";
?>