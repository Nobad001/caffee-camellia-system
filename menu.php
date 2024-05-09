<?php
include 'connect.php';
session_start();

if (isset($_SESSION['user_name'])) {
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home_page!</title>
	<style type="text/css">
		body{
			background-color: #27282c;
		}

			a{

  width: 10em;
  position: relative;
  height: 3.5em;
  border: 3px ridge #149CEA;
  outline: none;
  background-color: transparent;
  color: white;
  transition: 1s;
  border-radius: 0.3em;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

button::after {
  content: "";
  position: absolute;
  top: -10px;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #212121;
  transition: 0.5s;
  transform-origin: center;
}

a::before {
  content: "";
  transform-origin:center;
  position: absolute;
  top: 80%;
  left: 3%;
  width: 95%;
  height: 40%;
  background-color: #212121;
  transition: 0.5s;
}

a:hover::before, button:hover::after {
  transform: scale(0)
}

a:hover {
  box-shadow: inset 0px 0px 25px #1479EA;
}
div{
	margin-top:6em;
}

		

	</style>
</head>
<body>
	<center>
		<div>
			<a href="add_post.php">Add-Post</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="view_post.php">View-Post</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="view_candidate.php">View-Candidate</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="report.php">Report</a>&nbsp;&nbsp;&nbsp;
			<a href="session_d.php" class="w">Logout..</a>
			
		</div>
	</center>
</body>
</html>
























<?php

 
}

 else{
 	header('location:login.php');
 
 }
?>