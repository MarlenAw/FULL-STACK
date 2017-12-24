<?php

	$con = mysqli_connect("localhost","root","","fs5");

	if(!$con) {
		echo "Could not connect to DB!";
		die();
	}

?>