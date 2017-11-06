<?

	ob_start();	//	Avoid sending content before header 

	setcookie("name","Alex", time() + 60*60*24*365);
	setcookie("age","30", time() + 60*60*24*365);
	setcookie("midatNalayim","45", time() + 60*60*24*365);

	echo "Cookie saved!";
?>
<a href="http://localhost/Cookies/readCookie_example.php">Go to Read Cookie Example</a>