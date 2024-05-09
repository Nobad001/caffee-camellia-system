<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create_account!</title>
	<style type="text/css">
		fieldset{
			width: 6em;
			height: 16m;
			background-color:aliceblue;
			border-radius:0.5em ;
		}
		form{
			margin-top: 5em;

		}
		body{
			background-color: #27282c;
		}
		input{
			border-radius:0.5em ;
		}
		h1{
			font-style: italic;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="insert1.php">
			<fieldset>
				<h1>Create_account!</h1>
				User_Name
				<br><br>
				<input type="text" name="user_name">
				<br><br>Password
				<br><br>
				<input type="password" name="password">
				<br><br>
				<input type="submit" name="create" value="Create">
				<br><br>
				<a href="login.php">Login</a>
				
			</fieldset>
			
		</form>
		
	</center>
</body>
</html>