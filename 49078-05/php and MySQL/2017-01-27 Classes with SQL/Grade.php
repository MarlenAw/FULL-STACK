<?php

class Grade {
	
	//	Data Members
	var $id,
		$fullname,
		$course,
		$grade;
	
	//	Methods
	function __construct( $id = 0) {
		
		//	This class requires a $con variable to be available
		//	(outside of the class)
		global $con;
		
		//	Assign current id with passed id
		$this->id = $id;
		
		//	If no id then return (There's nothing to do)
		if( $this->id == 0 )
			return;
		
		//	The DB part
		
		
		if($con) {
			
			//	Build the Query
			$sql = "SELECT * FROM grades WHERE id='$this->id';";
			
			//	Run the Query	
			$result = mysqli_query($con, $sql);
			
			if( $row = mysqli_fetch_assoc($result) ) {
				
				//	Id found
				
				$this->fullname = $row["fullname"];
				$this->grade = $row["grade"];
				$this->course = $row["course"];
			}
		}
		
	}
}

?>