<?
	
	session_start();

	if( isset( $_SESSION["x"]) ) {
		
		echo $_SESSION["x"];	//	5
	}
	else
	{
		echo "X is not set yet in this session";
	}
	
	// echo $x;				//	.. nothing ..

?>