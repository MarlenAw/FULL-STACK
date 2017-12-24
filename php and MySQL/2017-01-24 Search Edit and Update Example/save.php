<?php
	
	session_start();
	require_once 'db_connect.php';

	//	1.	Read data from POST data
	$id = filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
	$fullname = filter_input(INPUT_POST,"fullname",FILTER_SANITIZE_STRING);
	$course = filter_input(INPUT_POST,"course",FILTER_SANITIZE_STRING);
	$grade = filter_input(INPUT_POST,"grade",FILTER_VALIDATE_INT);

	//	Validate input
	if(!isset($id)) {
		echo "Something is missing...";
		die();
	}


	//	2.	SQL Query
	$sql = "UPDATE grades SET fullname='$fullname', course='$course', grade='$grade' WHERE id='$id' ;";

	$result = mysqli_query($con, $sql);

	if(!$result) {
		echo "There was an error with SQL update query";
		die();
	}
	

	//	3. HTML
	//echo "Updated!";


	$_SESSION["form_message"] = "Updated!";
	header('location: search.php?keyword=' . $fullname );

?>