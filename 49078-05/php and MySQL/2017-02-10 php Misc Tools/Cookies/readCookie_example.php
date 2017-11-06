<?

	if(isset($_COOKIE["name"])) {
			
		echo "Hello " . $_COOKIE["name"];
	}
	else {
		echo "Hello Stranger!";
		echo "<br>";
		echo "<a href=http://localhost/Cookies/setCookie_example.php>";
		echo "Go to setCookie example";
		echo "</a>";
			
	}

?>