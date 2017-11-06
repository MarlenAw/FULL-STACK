<?php

function getGradeIds() {
	
	global $con;
	
	//	Create array of Ids
	$aIds = array();
	
	$sql = "SELECT id FROM grades;";
	
	$result = mysqli_query($con, $sql);
	
	while($row = mysqli_fetch_assoc($result)) {
		
		//	Insert result id into array of ids
		$aIds[] = $row["id"];
	}
	
	//	Return array of Ids
	return $aIds;
}

?>