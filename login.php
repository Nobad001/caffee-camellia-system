<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login_Form!</title>
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
		<form method="POST" action="session_s.php">
			<fieldset>
				<h1>Login_Form!</h1>
				User_Name
				<br><br>
				<input type="text" name="user_name">
				<br><br>Password
				<br><br>
				<input type="password" name="password">
				<br><br>
				<input type="submit" name="login" value="Login">
				<br><br>
				<a href="index.php">Create_Account</a>
				
			</fieldset>
			
		</form>
		
	</center>
</body>
</html>