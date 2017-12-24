<?
	require_once 'db_connect.php';
	require_once 'Data.php';
	require_once 'Grade.php';

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

	<h1>List of Grades</h1>

	<table>
		<tr>
			<th>id</th>
			<th>Full Name</th>
			<th>Course</th>
			<th>Grade</th>
		</tr>
		
		<? 
			//	Get ids of grades
			$aGradeIds = getGradeIds();
		
			//	Run through ids
			foreach( $aGradeIds as $gradeId ) { 
				
				//	Create an instance of a new Grade
				//	 of the given id
				$oGrade = new Grade( $gradeId );
		?> 
		<tr>
			<td><?= $oGrade->id ?></td>
			<td><?= $oGrade->fullname ?></td>
			<td><?= $oGrade->course ?></td>
			<td><?= $oGrade->grade ?></td>
		</tr>
		<? } ?>
	</table>
	
</body>
</html>