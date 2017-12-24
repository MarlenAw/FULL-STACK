<?php

require_once '../lib/db_connect.php';

//	1.	Read form input
$id = filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_POST,"category",FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT);

//echo $name . "<br>";
//echo $category . "<br>";
//echo $price . "<br>";
//echo $id . "<br>";
//
//if(isset($id)) echo "Set"; else echo "Not Set";
//if(empty($id)) echo "Empty"; else echo "Not Empty";
//
//die();

//	2.	Save to DB
if(isset($id) && !empty($id)) {
	
	//	Update Query
	$sql = "UPDATE products "
		 . "SET name='$name', category='$category', price='$price'"
		 . "WHERE id='$id';";
}
else {
	
	//	Add Query
	$sql = "INSERT INTO products (name, category, price) " 
		 . "VALUES ('$name','$category','$price');";	
}

//echo $sql;
//die();

mysqli_query($con, $sql) or die("Couldn't run sql query");


//	3.	Go to list of products
header('location: ../');

?>