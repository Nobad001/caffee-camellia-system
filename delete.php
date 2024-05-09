<?php

include 'connect.php';
$name=$_GET['post_name'];
$de=$_GET['post_id'];
$delete=mysqli_query($conn,"DELETE FROM Post WHERE post_id='$de'");
if ($delete==1) {
	echo"<script>alert('Your Post are delete'),location='view_post.php';</script>";
}



?>