<?php


	require_once 'db_config.php';

	//	$fname = $_GET["fname"];
	$fname = filter_input(INPUT_GET,"fname",FILTER_SANITIZE_STRING);
	$salary = filter_input(INPUT_GET,"salary",FILTER_SANITIZE_NUMBER_INT);

	//	isset
	if( !isset($salary) || empty($salary) ) {
		$salary = 7000;
	}


	//	Validate $fname before inserting in a query

	//	SQL INSERT INTO Query
	$sql = "INSERT INTO employees (fname, lname, dept, salary) VALUES ('$fname','Revivo','Web Dev','$salary');";
		
	
	if($con = mysqli_connect($db_host,$db_user,$db_password,$db_name)) {
		
		echo "Connected to DB!";

	} else {
		echo "Could not connect to db";
		die();
	}

	//	Run the query
	if(mysqli_query( $con, $sql)) {
		echo "<p>$sql</p>";	//	Avoid echoing the SQL query in production
		echo "$fname Added with a $salary salary!";
	}
	else {
		echo "<p>$sql</p>";	//	Avoid echoing the SQL query in production
		echo "There was an error";
	}
?>