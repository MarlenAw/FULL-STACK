<?php

class Product {
	
	//	Data Members / Properties
	
	var $name,
		$price,
		$category;
	
	//	Methods
	
	function __construct(){
		
		//	Set default value for price of 1.00 
		$this->price = 1.00;
	}
	
	
	function getVatPrice() {
		
		//	Calculate price including 17% VAT
		
		return $this->price * 1.17;
		
	}
	
	function printMe() {
		
		echo "<p>";
		echo "Product Name: $this->name <br>";
		echo "Price before VAT: $this->price <br> ";
		echo "Price after VAT: " . $this->getVatPrice() . "<br> ";
		echo "Category: $this->category ";
		echo "</p>";
	}
	
}

?>