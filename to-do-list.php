<?php
require_once('config.php');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);


//handling connection errors
if (mysqli_connect_errno()) {
	die(mysqli_connect_error());
}
if(isset($_POST['taskId'])){
	//define variable to hold $taskId retrieved from delete form. This is then used in the delete query.
	$taskIdDel=$_POST['taskId'];
	//delete task from table
	$deleteSql="DELETE FROM tasks WHERE id='$taskIdDel'";
	$deleteResult=mysqli_query($connection, $deleteSql);
}

if(isset($_POST['newTask'])) {
	//define variable to hold new task entered
	$task = $_POST['newTask'];
	//add new task to table
	$insertSql = "INSERT INTO tasks (task) VALUES ('$task')";
	$insertResult = mysqli_query($connection, $insertSql);
}

//select all tasks from table
$taskSql = "SELECT task, id FROM tasks ORDER BY id asc";
$taskResult = mysqli_query($connection, $taskSql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>My To Do List</title>
<link rel="stylesheet" href="to-do-styles.css" />
<script type="text/JavaScript" src="to-do-java.js"></script>
</head>
<body>
	<form method="POST">
	<div id="myDIV" class="header">
		<h2>My To Do List</h2>
		<input type="text" id="myInput" name="newTask" placeholder="Add new task" required>
		<input type="submit" class="addBtn" value="Add">
	</div>
	</form>
	
	<ul id="myUL">
		
		<?php 
		//display the tasks from the database
		if ($taskResult = mysqli_query($connection, $taskSql)) {
			while($row = mysqli_fetch_assoc($taskResult)){
					
					echo '<form method="POST">';
					//define variables to hold task and id # from database
					$taskName = $row['task'];
					$taskId = $row['id'];
					echo '<li>
					<span>'.$taskName.'</span>';
					//create a button that will delete a task from the database. 
					//Use the $taskId to know which task to delete.
					echo '<input type="hidden" name="taskId" class="close" value="'.$taskId.'">';
					echo '<input type="submit" name="submit" class="close" value="X">';
					echo '</li></form>';
			}
		}
		
		?>
		
		
	</ul>
	
</body>
</html>
