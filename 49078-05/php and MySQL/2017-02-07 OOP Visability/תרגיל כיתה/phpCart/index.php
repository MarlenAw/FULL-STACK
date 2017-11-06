<?php

	require_once 'class/Product.php';
	require_once 'class/Cart.php';
	
	$p1 = new Product("Bamaba",5.50,"Snacks");
	$p2 = new Product("Milki",3.00);
	//	$p3 = new Product("Kitkat");	//	Wrong
	//	$p3 = new Product();			//	Wrong

//	var_dump( $p1 );
//	var_dump( $p2 );

	//	$p1->price = 8;	//	Wrong: Cannot access private property 
	$p1->setPrice(8);


	$c = new Cart();
	$c->addProduct( $p1 );
	$c->addProduct( $p2 );

	//	var_dump( $c );

	//echo $c->listItems();

	//echo "Total to be paid: " . $c->getTotal();

	echo $c;

?>