<?

	function getContacts(){
		
		global $con;
		
		$arr = array();
		
		$sql = "SELECT id FROM contacts;";
		
		$result = mysqli_query($con, $sql);
		
		while($rs = mysqli_fetch_assoc($result)) {
			$arr[] = $rs["id"];
		}
		
		return $arr;
	}

?>