<?php
	require_once 'db_connect.php';

	$order = filter_input(INPUT_GET,"order",FILTER_SANITIZE_STRING);

	if( !isset($order)) {
		$order = "DESC";
	}
	else
		$order = ($order == "ASC" ? "DESC" : "ASC");
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Grades</title>
	<link rel="stylesheet" href="css/style.css" >
</head>
<body>

	<h1>Grades</h1>
	<table class="grades">
		<tr>
			<th>Name</th>
			<th>Course</th>
			<th><a href="?order=<?= $order ?>">Grade</a></th>
		</tr>
		
		<?php
			
			
			$sql = "SELECT * FROM grades ORDER BY grade $order;";

			$result = mysqli_query($con, $sql);		
		
			while($rs = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?= $rs["fullname"] ?></td>
			<td><?= $rs["course"] ?></td>
			<td><?= $rs["grade"] ?></td>
		</tr>
		<?php } ?>
		
		
	</table>

</body>
</html>