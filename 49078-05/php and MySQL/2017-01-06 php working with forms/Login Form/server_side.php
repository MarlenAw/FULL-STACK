<?
	//	This script uses sessions
	session_start();

	//	Assumptions
	$isLoggedin = false;
	$isDataMissing = true;

	//	1.	Read Form Data
	
	$username = $_POST["username"];
	$password = $_POST["password"];


	//	1.1	Store Data in Session
	
	$_SESSION["username"] = $username;

	//	2.	Validate
	if( isset($username) && isset($password)) {
		
		//	SO FAR.. SO GOOD
		$isDataMissing = false;
	}
	else {
		
		//	Something is missing
		$isDataMissing = true;		
	}
		
	//	3.	Authenticate
	if( $username == 'admin' && $password == '12345') {
		
		//	Succesfull
		$isLoggedin = true;
		$_SESSION["loggedIn"] = true;
		
		//	unset previous form data
		unset( $_SESSION["errorMessage"] );
		unset( $_SESSION["username"] );
	}
	else {
		
		//	Login Declined
		$isLoggedin = false;
		unset($_SESSION["loggedIn"]);	//	unset removes the variable
	}

echo "I was here 3";

	//	4.	Return to form?	Go to top_secret.php
	if($isDataMissing) {
			
		//	Redirect back to login form
		$_SESSION["errorMessage"] = "Please enter username AND password";
		header('location: index.php');
		die();	//	stop script right here
	} 
	else if($isLoggedin) {
		
		//	Redirecto to top_secret.php
		
		header('location: top_secret.php');
		die();
	} else {

		//	Redirect back to login form
		$_SESSION["errorMessage"] = "Invalid username or password";
		header('location: index.php');
		die();	//	stop script right here
	}

?>