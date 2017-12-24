<?php

	function getProductIDs(){
		
		global $con;	
		
		$IDs = array();
		
		$sql = "SELECT id FROM products;";
		
		$result = mysqli_query($con, $sql);
		
		while( $arrOneRow = mysqli_fetch_assoc( $result ) ) {
			
			$IDs[] = $arrOneRow["id"];
			
		}
		
		return $IDs;
	}

?>