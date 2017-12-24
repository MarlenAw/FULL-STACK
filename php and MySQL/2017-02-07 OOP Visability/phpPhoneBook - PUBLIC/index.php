<?php 

	require_once 'class/Contact.php';
	require_once 'class/PhoneBook.php';


	$book = new PhoneBook();

	
	$c1 = new Contact("Alex","12345");
	$c2 = new Contact("Dana","555");


	$book->arr[] = $c1;
	$book->arr[] = $c2;
	//	$book->arr[] = "Moshiko";	//	This will cause an error inside Phonebook

	
	//echo $book;

	echo $book->searchByName("Moshiko");

/*
	echo $book->arr[1];	//	$c2
	echo "<br>";
	echo "so far so good!";
*/
?>