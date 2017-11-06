<?php 

	require_once 'class/Contact.php';
	require_once 'class/PhoneBook.php';


	$book = new PhoneBook();

	
	$c1 = new Contact("Alex","12345");
	$c2 = new Contact("Dana","555");

	$book->addContact( $c1 );
	$book->addContact( $c2 );

	$book->addContactByNameAndPhone("Moshiko","050-888");
	$book->addContactByNameAndPhone("Gilad","777-333");
	
	$book->addContact( $c2 );

	$c2 = new Contact("Mazal","666");	//	Will not be added to Phonebook

//	$c2->name = "Mazal";
	
//	try {
//		
//		$book->addContact("Moshiko");
//	
//	} catch(exception $err) {
//		
//		echo "Something went wrong: " . $err->getMessage();		
//		
//	}

	echo $book;

	//echo $book->searchByName("Alex");

/*
	echo $book->arr[1];	//	$c2
	echo "<br>";
	echo "so far so good!";
*/
?>