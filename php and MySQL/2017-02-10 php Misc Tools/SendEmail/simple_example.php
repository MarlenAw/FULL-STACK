<?php

	$from = "webmaster@example.com";
	$to = "gilad@gmail.com";
	$subject = "Hi there";
	$message = "Message goes here";
	

	$headers = "From:$from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)) {
		echo "Email sent!";
	} else {
		echo "Email could not be sent";
	}


?>