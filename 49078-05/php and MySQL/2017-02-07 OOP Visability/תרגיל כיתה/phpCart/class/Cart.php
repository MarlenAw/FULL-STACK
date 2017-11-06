<?php

class Cart {
	
	private $aProducts = array();
	
	
	function addProduct( $p ) {
		if( $p instanceof Product) {
			
			$this->aProducts[] = $p;
			
		} else {
			
			throw new exception("must be a Product object");			
		}
	}
	
	
	function addProductByValues($name, $price, $category = "" ) {
		
		$p = new Product();
		$p->name = $name;
		//$p->price = $price;	// will not work: it's a private property!
		$p->setPrice( $price );
		$p->category = $category;
		
		
		$this->addProduct( $p );
	}
	
	
	function getTotal() {
		
		$sum = 0;
		
		foreach($this->aProducts as $product) {
			$sum += $product->getPrice();
		}
		
		return $sum;
		
	}
	
	function listItems() {
		
		$st = "";
		
		foreach($this->aProducts as $product) {
			
			$st .= "<div>";
			$st .= $product->name . " " . $product->getPrice();
			$st .= "</div>";
		}
		
		return $st;
	}
	
	function __toString() {
		
		return $this->listItems();
	}
}


?>