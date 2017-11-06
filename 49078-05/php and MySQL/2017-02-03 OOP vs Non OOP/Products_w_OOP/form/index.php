<?

	require_once '../lib/db_connect.php';
	require_once '../lib/functions.php';
	require_once '../class/Product.php';

	//	Read id
	$id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

	//	Create a product instance
	$p = new Product( $id );
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
				<td><input type="text" name="name" value="<?= $p->name ?>"  ></td>
			</tr>
			<tr>
				<td>Category</td>
				<td><input type="text" name="category" value="<?= $p->category ?>" ></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?= $p->price ?>"></td>
			</tr>	
			<tr>
				<td colspan="2" style="text-align: right;">
					<input type="submit" value="Save">
				</td>
			</tr>
		</table>
		<? if($p->id) { ?>
		<input type="hidden" name="id" value="<?= $p->id ?>" >
		<? } ?>
	</form>
</body>
</html>