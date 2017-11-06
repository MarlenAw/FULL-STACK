<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "fs5";

	if(!$con = mysqli_connect($db_host,$db_user,$db_password,$db_name)) {
		die('Could not connect to DB');
	}


	
	
?>