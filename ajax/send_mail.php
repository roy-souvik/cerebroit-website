<?php
error_reporting(0);

if ($_POST) {
	$name	=	ucfirst(trim($_POST['name']));
	$email = $_POST['email'];
	$subject = ucfirst($_POST['subject']);
	$mail_body = strip_tags($_POST['message']);

	$message = '<html><body>';
	$message .= $mail_body;
	$message .= '</body></html>';

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $to = "cerebroiting@gmail.com";
	  $headers 	= "From:{$email}\r\n";
	  $headers .= "Reply-To: cerebroiting@gmail.com \r\n";
	  $headers .= "MIME-Version: 1.0\r\n";
	  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			if (mail($to,$subject,$message,$headers)){
				echo 'Mail sent successfully';
	  	} else{
				echo 'Unable to send the mail';
	  	}
	}
	
}
?>
