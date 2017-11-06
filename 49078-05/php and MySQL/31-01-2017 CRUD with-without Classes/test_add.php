<?

	require_once 'classes/Product.php';
	require_once 'lib/db_connect.php';

//	$p = new Product();
//
//	$p->name = "Bisli";
//	$p->price = 5;
//
//	if( $p->isUniqueName() ) {
//		echo "Yes, $p->name is unique";
//	} else
//		echo "No. $p->name is NOT unique";
//	


	//	Add Example
	$p = new Product();
	$p->name = "Milki";
	$p->price = 3.0;
	$p->category = "Dairy";
	$p->save();


	//	Update Example
	$p = new Product(26);
	$p->name = "Bisli";
	$p->save();


?>