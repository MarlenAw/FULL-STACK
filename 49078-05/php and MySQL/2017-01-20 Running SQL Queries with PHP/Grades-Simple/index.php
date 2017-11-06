<?php
	require_once 'db_connect.php';
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
			<th>Grade</th>
		</tr>
		
		<?php
		
			$sql = "SELECT * FROM grades LIMIT 15;";

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