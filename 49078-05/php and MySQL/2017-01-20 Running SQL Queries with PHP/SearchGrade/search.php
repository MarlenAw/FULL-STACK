<?php
	
	//	1.	Read keyword parameter from URL
	$keyword = filter_input(INPUT_GET,"keyword",FILTER_SANITIZE_STRING);

	//	2.	SQL Query
	if( isset($keyword )) { 
		$sql = "SELECT * FROM grades WHERE fullname LIKE '%$keyword%' OR course LIKE '%$keyword%';";
	}
	else
	{
		//	$sql = "SELECT * FROM grades WHERE 1<>1;";
		echo "<h1>Search without a keyword is not allowed</h1>";
		die();				
	}

//	echo $sql;
//	die();

	//	3.	Create HTML
	//	----------------
	//	3.1	Connection
	//	3.2	Run the Query
	//	3.3	Create the HTML table inside the entire HTML



	//	3.1	Connection
	$con = mysqli_connect("localhost","root","","fs5");

	//	3.2	Run the Query
	$result = mysqli_query($con, $sql);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
	<h1>Search Results</h1>
	
	<table>
		<tr>
			<th>Name</th>
			<th>Course</th>
			<th>Grade</th>
			<th>Action</th>
		</tr>
		
		<?
			//	3.3	Create the HTML table inside the entire HTML
			
			while( $row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?= $row["fullname"] ?></td>
			<td><?= $row["course"] ?></td>
			<td><?= $row["grade"] ?></td>
			<td><a href="edit.php?id=<?= $row["id"] ?>">EDIT</a></td>
		</tr>
		<?
			}
		?>
		
	</table>

</body>
</html>