<?php 

	class Product {
		
		var $id,
			$name,
			$category,
			$price;
		
		
		function __construct( $id = 0 ){
			$this->id = $id;
			
			$this->readDB();
		}
		
		function readDB() {
			
			global $con;	//	Should be inside the function
			
			if($this->id) {
				
				$sql = "SELECT * FROM products WHERE id='$this->id';";
				
				$result = mysqli_query($con,$sql );
				
				if( $arrOneRow = mysqli_fetch_assoc($result) ) {
					
					$this->name = $arrOneRow["name"];
					$this->price = $arrOneRow["price"];
					$this->category = $arrOneRow["category"];
					
				}				
			}			
		}	
		
		function save() {
			if($this->id) {
				$this->updateDB();
			} else {
				$this->addToDB();
			}
		}
		
		function addToDB() {
			
			global $con;
			
			$sql = "INSERT INTO products "
				 . "(name,price,category) "
				 . "VALUES ('$this->name','$this->price','$this->category');";
			
			
			if( mysqli_query( $con, $sql ) ) {
				
				$this->id = mysqli_insert_id( $con );				
			}			
		}
		
		function updateDB() {
			
			global $con;
			
			$sql = "UPDATE products SET "
				 . "name = '$this->name', "
				 . "price = '$this->price', "
				 . "category = '$this->category' "
				 . "WHERE id = '$this->id'; ";
				
			mysqli_query($con, $sql);
			
		}
		
		function isUniqueName(){
			
			global $con;
			$sql = "SELECT id FROM products WHERE name='$this->name';";
			
			if( $result = mysqli_query($con, $sql) ) {
				
				if ( mysqli_num_rows($result) > 0 ) 
					return false;									
				
				//	Another way..
				//	return !mysqli_num_rows($result);
				//	
				//	! will convert 0 to true
				//	  any other number to false
				
				
			}
				
				
			//	Name seems to be unique	
			return true;	
		}
	}


?>