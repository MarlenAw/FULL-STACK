<?
	//	1. Read id from URL
	$id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);

	//	2.	Build the SQL query
	$sql = "SELECT * FROM grades WHERE id ='$id';";

	//	Connect to DB and run the query
	require_once 'db_connect.php';

	if($result = mysqli_query($con, $sql)) {
		if(mysqli_num_rows($result) == 0) {
			echo "ID not found";
			die();
		}
		else
		{
			$record = mysqli_fetch_assoc($result);
		}
	}


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit </title>
</head>
<body>

	<form method="post" action="save.php">
		<label>Name</label> 
		<input type="text" name="fullname" value="<?= $record["fullname"] ?>" >
		<br>
		
		<label>Course</label>
		<!--select name="course">
			<option>HTML</option>
			<option <? if($record["course"]=="php") echo " selected "; ?>>php</option>
			<option <? if($record["course"]=="CSS") echo " selected "; ?>>CSS</option>			
		</select-->
		
		
		<select name="course">
			<?
				$sql2 = "SELECT DISTINCT course FROM grades ORDER BY course;";
			
				$result2 = mysqli_query($con, $sql2);
			
				while( $row2 = mysqli_fetch_assoc($result2) ) {
			?>
			<option <? if( $record["course"] == $row2["course"]) echo " selected " ?> ><?= $row2["course"] ?></option>
			
			<?
				}
			
			?>
		</select>
		
		<br>
		<label>Grade</label>
		<input type="text" name="grade" value="<?= $record["grade"] ?>">
		
		<br>
		<input type="hidden" name="id" value="<?= $record["id"];  // or .. $id ?>" >
		<input type="submit" value=" Save ">
	</form>


</body>
</html>