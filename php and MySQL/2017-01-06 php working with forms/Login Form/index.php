<?php

	//	Use Sessions
	session_start();

	//	Variable Init.
	$username = "";
	$errorMessage = "";

	//	Restore username from session, if exists
	if(isset($_SESSION["username"]))
		$username = $_SESSION["username"];		

	//	Restore error message from session, if exists
	if(isset( $_SESSION["errorMessage"]))
		$errorMessage = $_SESSION["errorMessage"];

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<style>
		.errorMessage { 
			background-color: #e0a5a5;
			padding: 10px;
			font-family: sans-serif;
		}
	</style>
</head>
<body>

	<? if( !empty( $errorMessage ) ) {  ?>
	<div class="errorMessage"><?= $errorMessage ?></div>
	<? } ?>
	
	<form action="server_side.php" method="post">
		<label>UserName</label> <input type="text" name="username" value="<?= $username ?>" > <br>
		<label>Password</label> <input type="password" name="password" > <br>
		
		<input type="submit" value=" Login " >
		
	</form>

</body>
</html>