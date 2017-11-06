<?php

class Product {

	//	Data Members
	var $id,
		$name,
		$category,
		$price;
	
	
	function __construct( $id = 0 ) {
		
		$this->id = $id;
		
		$this->readDB();
	}
	
	function readDB() {
		
		global $con;
		
		if($this->id) {
			
			$sql = "SELECT * FROM products WHERE id='$this->id';";
			
			$result = mysqli_query($con, $sql);
			
			if( $row = mysqli_fetch_assoc($result)) {
				
				// Set data members according to SQL record of the current id
				
				$this->name = $row["name"];
				$this->category = $row["category"];
				$this->price = $row["price"];
				
			}			
		}		
	}
	
	function save() {
		
		global $con;
		
		if($this->id) {
			
			//	id exists, this is an update query
			
			$sql = "UPDATE products "
				 . "SET name='$this->name', "
				 . "category='$this->category', "
				 . "price='$this->price' "
				 . "WHERE id = '$this->id';";
		}
		else {
			
			//	id does NOT exist, this is an "add" query
			
			$sql = "INSERT INTO products "
				 . "(name, category, price) "
				 . "VALUES ('$this->name','$this->category','$this->price');";
		}
		
		//	Run the "whatever" query
		mysqli_query($con, $sql);
		
		//	If add query, then bring new id
		if(!$this->id) 						
			$this->id = mysqli_insert_id($con);			
	
	}
}


?>