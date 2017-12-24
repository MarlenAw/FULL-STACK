<?php	require_once 'lib/db_connect.php'; ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Products</title>
	<script>
		function addNew() {
			document.location.href = "form/";
		}
		
		function editProduct( id ) {
			document.location.href = "form/?id=" + id;
		}
	</script>
</head>
<body>

	<h1>List of Products</h1>
	
	<a href="form/">+ Add new Product</a>
	
	<button onclick="addNew()">Add New</button>
	
	<table border=1>
		<tr>
			<th>Product</th>
			<th>Category</th>
			<th>Price</th>
			<td>Action</td>
		</tr>
		
		<?php 
		
			//	Build the Query
			$sql = "SELECT * FROM products;";
		
			//	Run the Query and get results into $result
			$result = mysqli_query($con, $sql);
			
			
		?>
		
		<?php while( $row = mysqli_fetch_assoc( $result ) ) { ?>
		<tr>
			<td><?= $row["name"] ?></td>
			<td><?= $row["category"] ?></td>
			<td><?= $row["price"] ?></td>						
			<td><button onclick="editProduct( <?= $row["id"] ?> )">Edit</button>
				<a href="form/?id=<?= $row["id"]; ?>">Edit</a>
			</td>
		</tr>
		<?php } ?>
		
	</table>


</body>
</html>