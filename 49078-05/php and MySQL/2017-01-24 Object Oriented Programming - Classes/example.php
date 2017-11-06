<?php

class Contact {
	
	
	//	Data Members  or .. Properties
	var $name, 
		$phone, 
		$email;
	
	//	Methods - methods are functions inside a class
	
	function __construct( $name = "Nobody" ){
		
		//	Set default values
		
		//$this->name = "Nobody";
		
		$this->name = $name;
		
	}
	
	function sayHi() {
		
		return "Hello, my name is $this->name";
		
	}
}


//	Create a new Instance of the Contact Object
$c1 = new Contact("John");

//	echo $c1->sayHi();
echo $c1->name;
echo "<br>";

//	Create another Instance ..
$c2 = new Contact();
echo $c2->name;
die();


//	Assign Values

$c1->name = "Alex";
$c1->phone = "050-1234567";
$c1->email = "alex@blabla.com";


$c2->name = "Alexa";
$c2->phone = "051-33445566";
$c2->email = "alexa@walla.com";
	

//	echo $c2->sayHi();	 // Hello, my name is Alexa

//	Output
//	var_dump( $c1 );

//	Output:
//	=======
//object(Contact)[1]
//  public 'name' => string 'Alex' (length=4)
//  public 'phone' => string '050-1234567' (length=11)
//  public 'email' => string 'alex@blabla.com' (length=15)


//	Create another referance for c2, call it c3
$c3 = $c2;

//	Change name of c3
$c3->name = "Dana";

//echo $c2->name;	//	 Alexa .. or.. Dana?	Dana!!!!

$c3 = $c1;

//echo $c3->name; // Alex


unset($c3);

echo $c1->name;

unset($c1);

//	echo $c1->name;				will not work, c1 is not a reference anymore


?>