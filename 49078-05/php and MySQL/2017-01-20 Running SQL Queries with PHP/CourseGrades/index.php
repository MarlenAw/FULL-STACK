<?php

	//	Connection
	$con = mysqli_connect("localhost","root","","fs5");

	if(!$con) {
		
		echo "There was an error accessing the database" . "<br>";
		echo mysqli_connect_error();	//	Kepp in mind, Avoid too many details in production
		die();
		
	}

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
			<th>Course</th>
			<th>Average</th>
		</tr>
		<?php
		
			//	SQL Query
			$sql = "SELECT course, AVG(grade) AS average " 
				 . "FROM grades "
				 . "GROUP BY course;"
				 ;
		
		
			$result = mysqli_query($con, $sql);
		
			while( $oneRow = mysqli_fetch_assoc( $result ) ) {
			?>
			<tr>
				<td><?= $oneRow["course"] ?></td>
				<td><?= number_format( $oneRow["average"] , 2 );    ?></td>
			</tr>		
			<?
			}
		
		?>

		
	</table>

</body>
</html>