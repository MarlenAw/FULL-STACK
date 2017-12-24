<?php 

	require_once 'class/Contact.php';


	$c1 = new Contact();

	$c1->name = "Alex";
	$c1->phone = "123";


	$c2 = new Contact("Dana","555");	

	echo $c1;	//	Works because  __toString() is implemented in Contact class
	echo "<br>";
	echo $c2;
	echo "<br>";

	$c3 = new Contact("Moshe");	//	phone will be set to its default value
	echo $c3;
	echo "<br>";
	

	print_r($c2);	//	Works anyway

?>