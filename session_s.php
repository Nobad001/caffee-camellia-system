<?php
include 'connect.php';
session_start();
if (isset($_POST['login'])) {

	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
$sel=mysqli_query($conn,"SELECT * FROM Users WHERE user_name='$user_name' and  password='$password'");
$dd=mysqli_num_rows($sel);
 
 if ($dd==1) {
 	$_SESSION['user_name']=$user_name;

 	header('location:menu.php');
 }
 else{
 	echo "<script>alert('user_name or password are not mached!'),location='index.php';</script>";
 }

}
?>