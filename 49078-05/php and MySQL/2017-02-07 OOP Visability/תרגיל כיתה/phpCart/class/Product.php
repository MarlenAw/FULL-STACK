<?php

class Product {
	
	public $name, $category;
	private $price;
	
	function __construct($name, $price, $category = "") {
		
		$this->name = $name;
		//	$this->price = $price;	
		$this->setPrice( $price );
		$this->category = $category;
		
	}
	
	function setPrice( $newPrice ) {
		if( $newPrice >= 0) {
			$this->price = $newPrice;
		} else {
			throw new exception("Price cannot be negative");
		}
	}
	
	function getPrice() {
		return $this->price;
	}
}


?>