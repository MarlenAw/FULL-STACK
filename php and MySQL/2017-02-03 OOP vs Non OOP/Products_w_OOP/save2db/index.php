<?php

	require_once '../lib/db_connect.php';
	require_once '../lib/functions.php';
	require_once '../class/Product.php';
	

	//	1. Read input
	$id = filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
	$name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
	$category = filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING);
	$price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT);

	//	2. Create instance and set new values
	$p = new Product($id);
	$p->name = $name;
	$p->category = $category;
	$p->price = $price;

	//	3. Save to DB
	$p->save();

	//	Go to list
	header('location: ../');


?>