<?php
include 'connect.php';
include 'menu.php';
$dt=$_GET['post_id'];
$update=mysqli_query($conn,"SELECT * FROM Post where post_id='$dt'");
while ($data=mysqli_fetch_array($update)) {?>

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modify_Post</title><style type="text/css">
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
		<form method="POST" action="">
		<h1>Update_Post!</h1>
		Post_name
		<br><br>
		<input type="text" name="post_name" value="<?php echo $data['1'];?>">
		<br><br>
		<input type="submit" name="update" value="Update">
		</form> 
	</center>
</body>
</html>

<?php 
}



if (isset($_POST['update'])) {
	$post_name=$_POST['post_name'];

$post=mysqli_query($conn,"UPDATE  Post SET post_name='$post_name' WHERE post_id='$dt'");

if ($post==1) {
	echo "<script>alert('$post_name Updated!'),location='view_post.php';</script>";
}
else{
	echo "<script>alert('$post_name Are Not Updated!'),location='view_post.php';</script>";
}
	
}

?>