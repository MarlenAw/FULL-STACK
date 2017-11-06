<?php

	$mode = "";
	$EOL = "<br>";		//	End of Line for HTML

	if(isset($_GET["mode"])) {
		$mode = $_GET["mode"];		
	}

	if($mode == "CSV") {
		
		
		$filename = "myData_" . date("YMd_H-i") . ".csv";
		$EOL = "\r\n";	//	End of Line for CSV

		//	Let the browser DOWNLOAD the output as a file
		header("Content-Type: text/csv");
		header("Content-Disposition: attachment; filename=$filename");		
		
	}
	

		

	//	Ouput would be part of the downloaded file
	//	will not be displayed on the screen
	echo "Bamba, 5.00, Snacks, Osem" . $EOL;
	echo "Bisli, 5.00, Snacks, Osem" . $EOL;
	echo "Milki, 5.00, Snacks, Strauss" . $EOL;
	echo "Tortit, 5.00, Snacks, Elite" . $EOL;
	echo "Agozi, 5.00, Snacks, Elite";

?>