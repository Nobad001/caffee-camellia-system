<?php
include 'connect.php';
if (isset($_POST['create'])) {

	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
$insert=mysqli_query($conn," INSERT INTO users SET user_name='$user_name',password='$password'");


if ($insert==1) {
	echo "<script>alert(' $user_name create are successed!'),location='login.php';</script>";
	
}

}

?>