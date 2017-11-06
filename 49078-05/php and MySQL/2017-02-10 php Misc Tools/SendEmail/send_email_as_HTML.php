<?php

	$fromEmailAddress = "webmaster@example.com";
	$fromDisplayName = "My Site";

	$toEmailAddress = "gilad@gmail.com";
	$toDisplayName = "Gilad";


	$subject = "Hi there";


	$message = "<html>
	<head>
	  <title>Birthday Reminders for August</title>
	</head>
	<body>
	  <p>Here are the birthdays upcoming in August!</p>
	  <table>
		<tr>
		  <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
		</tr>
		<tr>
		  <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
		</tr>
		<tr>
		  <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
		</tr>
	  </table>
	</body>
	</html>";
	

	//	Convert subject and display names to base64 (for the UTF-8 support)
	$subject = "=?UTF-8?B?" . base64_encode($subject)  ."?=";
	$fromDisplayName = "=?UTF-8?B?".base64_encode($fromDisplayName)."?=";


	//	Email Headers to avoid anti spam filtering

	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/html; charset=utf-8";

	// Additional headers
	$headers[] = "To: $toDisplayName <$toEmailAddress>, Amir <amir@example.com>";
	$headers[] = "From: $fromDisplayName <$fromEmailAddress>";
	$headers[] = "Cc: birthdayarchive@example.com";
	$headers[] = "Bcc: birthdaycheck@example.com";

	if(mail($to, $subject, $message, $headers)) {
		echo "Email sent!";
	} else {
		echo "Email could not be sent";
	}


?>