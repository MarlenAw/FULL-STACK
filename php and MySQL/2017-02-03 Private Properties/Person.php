<?php

	class Person {
		
		var $name,
			$phone;
		
		private $age, $birthYear;
		
		
		
		function sayHi(){
			return "Hi, my name is $this->name and I'm $this->age years old!";
		}
		
		//	Setters & Getters
		
		private function setAge( $age ) {
			$this->age = $age;
		}
		
		function getAge() {
			return $this->age;
		}
		
		function setBirthYear( $year ) {
			$this->birthYear = $year;
			
			$this->setAge( 2017 - $this->birthYear );
		}
		
		function getBirthYear() {
			return $this->birthYear;
		}

	}

	$p = new Person();

	$p->name = "Alex";
	$p->phone = "1234567";
	$p->setBirthYear(1985);

	//	$p->age = 30; 	//	will not work, because it's a private property
	//	$p->setAge(30);

	//	echo $p->sayHi();

	echo "Hello, $p->name - you are " .  $p->getAge() . " years old ";

	

?>