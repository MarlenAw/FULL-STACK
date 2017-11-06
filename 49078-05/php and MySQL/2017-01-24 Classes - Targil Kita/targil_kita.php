<?php

	//	Include the Product Class
	require_once 'Product.php';

	//	Create Instances
	$p1 = new Product();
	$p2 = new Product();

	//	Assign real numbers
	$p1->name = "Bamba";
	$p1->price = 5;
	$p1->category = "Sancks";

	//	Same thing for the other product
	$p2->name = "Milki";
	//$p2->price = 2.90;
	$p2->category = "Diary";

	
	//	Testing getVatPrice()
	echo $p1->name;
	echo "<br>";
	echo $p1->getVatPrice();	//	5.85
	

	//	Testing printMe()
	$p1->printMe();
	$p2->printMe();
	

?>