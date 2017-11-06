<?php

class Contact {
	
	public 	$name,
			$phone;
	
	
	function __construct($n = "", $p = "") {
		
		$this->name = $n;
		$this->phone = $p;
	}
	
	public function sayHi() {
		return "Hi, my name is $this->name";
	}
	
	function __toString() {
		
		return $this->name . " " . $this->phone;
		
	}
}

?>