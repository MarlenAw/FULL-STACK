<?

	//	This script uses sessions
	session_start();

	//	Already Logged in?
	//	If not, redirect to login page AND stop here

	if( !isset($_SESSION["loggedIn"]) ) {
		header('location: ./');	//	eqv to 'location: index.php' of the current directory
		die();						//	stop here
	}
	
?>
<h1>Top Secret</h1>