<?
	require_once 'classes/Product.php';
	require_once 'lib/db_connect.php';
	require_once 'lib/global_functions.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

	<table border="1">
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Price</th>
		</tr>
		
		<? 
			$IDs = getProductIDs();
		
			foreach($IDs as $id ){ 
				
				$oProduct = new Product( $id );
		?>
		<tr>
			<td><?= $oProduct->id ?></td>
			<td><?= $oProduct->name ?></td>
			<td><?= $oProduct->price ?></td>
		</tr>
		<? } ?>
	</table>


</body>
</html>