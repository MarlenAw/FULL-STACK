<?
	//	Include Classes
	require_once	'db_connect.php';
	require_once 	'Grade.php';

	$id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
	if(!isset($id))
		$id = 0;

	$g = new Grade( $id );

?>
<h1><?= $g->fullname ?></h1>
<lable><?= $g->course ?></lable> <span><?= $g->grade ?></span>