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
	}


?>