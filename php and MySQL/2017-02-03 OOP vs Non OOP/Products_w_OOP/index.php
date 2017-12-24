<? 
	require_once 'lib/db_connect.php';
	require_once 'lib/functions.php';
	require_once 'class/Product.php';

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Products</title>
	<script>
		
		function addNewProduct() {
			
			document.location.href = "form/";
		}
		
		//	Another way to create functions in JS
		var editProduct = function( id ) {
			
			document.location.href = "form/?id=" + id;
		}
	</script>
</head>
<body>

	<h1>List of Products</h1>
	<button onclick="addNewProduct()">Add New</button>
	<table border=1>
		<tr>
			<th>Product</th>
			<th>Category</th>
			<th>Price</th>
			<td>Action</td>
		</tr>
		
		<?
			
			$aProductIDs = getProductIDs();
		
		 	foreach( $aProductIDs as $id ) { 
		
				$oProduct = new Product( $id );	
		?>
		<tr>
			<td><?= $oProduct->name ?></td>
			<td><?= $oProduct->category ?></td>
			<td><?= $oProduct->price ?></td>						
			<td><button onclick="editProduct(<?= $oProduct->id ?>)">Edit</button></td>
		</tr>
		<?php } ?>
		
	</table>


</body>
</html>