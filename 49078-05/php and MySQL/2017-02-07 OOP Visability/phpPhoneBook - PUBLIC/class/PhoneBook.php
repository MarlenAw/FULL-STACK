<?php

	class Phonebook {
		
		public $arr = array();
		
		function searchByName( $name ) {
			
			$phone = "Not Found";
			
			foreach($this->arr as $contact) {
				
				if($contact->name == $name) {
					$phone = $contact->phone;
					break;
				}
			}
			
			return $phone;
		}
		
		function __toString() {
			
			$st = "";
			
			foreach($this->arr as $contact) {
				
				$st .= $contact;	// $st = $st . $contact;	
				$st .= "<br>";
				
			}
			
			return $st;
		}
		
	}

?>