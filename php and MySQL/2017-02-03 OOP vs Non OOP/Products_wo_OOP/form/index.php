<?php
	
	require_once '../lib/db_connect.php';

	//	Read id from query string (URL)
	$id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

	//	Default form values
	$name = "";
	$category = "";
	$price = 0;

	if(isset($id)) {
		
		$sql = "SELECT * FROM products WHERE id='$id';";
				
		$result = mysqli_query($con, $sql);
		
		if($row = mysqli_fetch_assoc($result)) {
			$name = $row["name"];
			$category = $row["category"];
			$price = $row["price"];
		}
		
	}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add a new product</title>
</head>
<body>
	<h1>Add New Product</h1>

	<form action="../save2db/" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?= $name ?>" ></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category" value="<?= $category ?>" ></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?= $price ?>" ></td>
			</tr>	
			<tr>
				<td colspan="2" style="text-align: right;">
					<input type="submit" value="Save">
				</td>
			</tr>
		</table>
		<? if(isset($id)) { ?>
		<input type="hidden" name="id" value="<?= $id ?>" >
		<? } ?>
	</form>
</body>
</html>