<?php

	//	DB Connection Credentials
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "fs5";


	$con = mysqli_connect($db_host, $db_user, $db_password,$db_name);
		
	if(!$con) {
		echo "There was an error connecting to the data base";
		die();
	}

?>