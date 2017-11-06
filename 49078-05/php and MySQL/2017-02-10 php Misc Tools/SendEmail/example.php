<?php

	echo $_SERVER["REMOTE_ADDR"];		//	ip address of the client
	echo $_SERVER["HTTP_HOST"];			//	domain name sent by the client 
	echo $_SERVER["SERVER_NAME"];		//	domain name determined by the server ** use this **
	echo $_SERVER["HTTP_USER_AGENT"];	//	client name like Mozilla/5.0 Chrome/56.0.2924.87 Safari/537.36
	echo $_SERVER["REQUEST_URI"];		//	the part of the URL right after the domain name /Server Variables/example.php?name=Alex
	echo $_SERVER["SCRIPT_NAME"];		//  the part of the URL right after the domain name (without parameters) /Server Variables/example.php
	echo $_SERVER["DOCUMENT_ROOT"];		// 	example: C:/wamp/www/
	echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; //	'en-US,en;q=0.8'


	//	or.. take a look at this
	var_dump($_SERVER);

?>