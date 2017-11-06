<?
	session_start();		//	Mandatory when working with sessions

	$_SESSION["x"] = 5;

	$x = 8;

	echo $_SESSION["x"];	//	5
	echo $x;				//	8

?>