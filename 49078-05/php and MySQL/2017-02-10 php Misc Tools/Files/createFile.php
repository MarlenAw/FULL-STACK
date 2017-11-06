<?
	$f = fopen("myData.txt","a");

	//	w 	write, 	delete previous content
	//	a	write,	append to previous content

	fputs($f, "\r\n");
	fputs($f, "Hello PHP!");

	fclose($f);
?>