<?php

	function getProductIDs() {
		
		global $con;
		
		$arr = array();
		
		$sql = "SELECT id FROM products;";
		
		$result = mysqli_query($con, $sql);
		
		while( $row = mysqli_fetch_assoc($result)) {
			$arr[] = $row["id"];
		}
		
		
		return $arr;
	}

?>