<?php

	class Phonebook {
		
		private $arr = array();
		
		
		function addContact( $oContact ) {
			
			if($oContact instanceof Contact) {
				
				//	$oContact is an instance of the Contact class
				
				//	add to array of contacts
				$this->arr[] = $oContact;
			} else {
				throw new exception("addContact requires a Contact object");
			}
		}
		
		function addContactByNameAndPhone($name, $phone = "") {
			
			$newContact = new Contact($name, $phone);
			
			$this->addContact( $newContact );
			
		}
		
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