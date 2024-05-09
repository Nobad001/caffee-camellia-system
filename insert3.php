<?php
include 'connect.php';
if (isset($_POST['add'])) {

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
	$post_id=$_POST['post_id'];
	$exam_date=$_POST['exam_date'];
	$phone_number=$_POST['phone_number'];
	$marks=$_POST['marks'];
$inser=mysqli_query($conn,"INSERT INTO candidates_result SET first_name='$first_name',
	last_name='$last_name', gender='$gender', date_of_birth='$date', post_id='$post_id', exam_date='$exam_date',
	phone_number='$phone_number', marks='$marks'");
if ($inser==1) {
	echo "<script>alert('$first_name $last_name are added!'),location='view_candidate.php';</script>";
}

	

}


?>