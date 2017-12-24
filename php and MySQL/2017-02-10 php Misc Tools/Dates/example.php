<?php

	echo date("Y M, D");	//	2017 Feb, Fri
	echo "<br>";
	echo date("Y F l");		//	2017 February Friday


	echo "<br>";
	$currentTimestamp = mktime(11,14,0,2,10,2017);		
	echo $currentTimestamp; //	1486721640 of 2017-10-2 11:14 

	echo "<br>";
	echo date("Y m d H:i", $currentTimestamp );	//	Convert back to a date

?>