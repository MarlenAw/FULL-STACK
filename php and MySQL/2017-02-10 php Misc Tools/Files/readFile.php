<?
	$f = fopen("myData.txt","r");

	while( $st = fgets($f) ) {
		echo $st;
	}

?>