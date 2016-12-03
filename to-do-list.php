<?php

$task = $_POST['task'];

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
		<input type="text" id="myInput" name="task" placeholder="Add new task">
		<input type="submit" class="addBtn" value="Add">
	</div>
	</form>
	
	<ul id="myUL">
		
		<li> <?php echo $task; ?> </li>
		
	</ul>
	
</body>
</html>
