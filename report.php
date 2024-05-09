<?php
include 'connect.php';
require 'menu.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report!</title>
	<style type="text/css">
		    tr th{
     	color:greenyellow;
     }
     tr td{
     	color: white;
     }
     table{
     	border-radius: 0.5em;
     	margin-top: 3em;
     }
     h1{
     	font-style: italic;
     	color:rosybrown;
     }
     i{
     	color: white;
     }
     form{
     	margin-top: 3em;
     }
     input{
     	border-radius: 0.5em;
     }
     i: hover{
     	background-color: orangered;
     	padding: 0.5em;
      transition: 1s;
     }
     .w2: hover{
     	background-color: orangered;
     	padding: 0.5em;
      transition: 1s;
     }

	</style>
</head>
<body>
	<center>
		<form method="POST" action="decision.php">
       
<i>Post_Name</i><br><br>
<input type="text" name="name" required>
<br><br>
<input type="submit" name="report" value="Reporting.." class="w2">
      </form>
	</center>

</body>
</html>




