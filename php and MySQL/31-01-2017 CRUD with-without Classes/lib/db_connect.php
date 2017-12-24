<?php

	$con = mysqli_connect("localhost","root","","fs5");

	if(!$con) {
		echo "There was an error accessing the Database!";
		die();
	}

?>