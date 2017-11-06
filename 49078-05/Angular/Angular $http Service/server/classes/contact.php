<?php

class Contact {
	
	var $id,
		$fullname,
		$phone;
	
	function __construct( $id=0 ){
		
		if($id) {
			$this->id = $id;
			
			$this->read_db();
		}
	}
	
	function read_db(){
		
		global $con;
		
		$sql = "SELECT * FROM contacts WHERE id='$this->id'; ";
		
		$result = mysqli_query($con, $sql);
		
		if($rs = mysqli_fetch_assoc($result)) {
			
			$this->fullname = $rs["fullname"];
			$this->phone = $rs["phone"];
		}		
	}
	
	function addToDB() {
		
		global $con;
		
		$sql = "INSERT INTO contacts (fullname,phone) " 
			 . "VALUES ('$this->fullname','$this->phone');";
		
		
		mysqli_query($con, $sql) or die("Couldn't add to db");
	}
	
}

?>