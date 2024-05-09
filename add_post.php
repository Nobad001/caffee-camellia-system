<?php
include 'connect.php';
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add_Post</title><style type="text/css">
		form{
			margin-top: 6em;
			font-style:italic;
			color: white;
		}
		h1{
			color: darkgoldenrod;
			font-style: italic;
		}
		input{
			background-color:darkkhaki;
			border-radius: 0.5em;
		}

	</style>
</head>
<body>
	<center>
		<form method="POST" action="insert2.php">
		<h1>Add_Post!</h1>
		Post_name
		<br><br>
		<input type="text" name="post_name">
		<br><br>
		<input type="submit" name="add" value="Add">
		</form> 
	</center>
</body>
</html>