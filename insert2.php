<?php
include 'connect.php';
include 'menu.php';


if (isset($_POST['add'])) {
	$post_name=$_POST['post_name'];
$inser=mysqli_query($conn,"INSERT INTO Post SET post_name='$post_name'");
if ($inser==1) {
	echo "<script>alert('$post_name Are_Added'),location='view_post.php';</script>)";
	
}
}

?>