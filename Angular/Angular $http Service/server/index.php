<?
	
	require_once 'lib/db_connect.php';
	require_once 'lib/global.php';
	require_once 'classes/contact.php';

	$q = filter_input(INPUT_GET,'q',FILTER_SANITIZE_STRING);

	$contactJohn = array("name"=>"John", "phone"=>"052");

//	var_dump( $contactJohn );
	//echo $contact["name"];

//	$st = json_encode($contact);
//	echo $st;
//
//	die();

	switch($q) {
			
		case "Contacts":
			
			echo "[";
			echo '{ "name": "Alex", "phone": "050" },';
			echo '{ "name": "Dana", "phone": "051" },';
			echo json_encode($contactJohn);
			echo "]";
			
			break;
			
		case "newContact":
			
			//	Store received raw input data 			
			$data = file_get_contents('php://input');
			
			$arr = json_decode( $data, true );
			
			
			//	Add to DB
			$contact = new Contact();
			$contact->fullname = $arr["fullname"];
			$contact->phone =  $arr["phone"];

			$contact->addToDB();
			
			
			
			//	OUTPUT 
			echo "Received \n";
			echo "Fullname: " . $arr["fullname"] . "\n";
			echo "Phone: " . $arr["phone"] . "\n";
			
			
			break;
			
		default:
			echo "Alex Slava";
	}

	

?>