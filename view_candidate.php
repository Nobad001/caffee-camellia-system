<?php
include 'connect.php';
include 'menu.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View_candidates</title>
	<style type="text/css">
		
    tr th{
     	color:greenyellow;
     }
     tr td{
     	color: white;
     }
     table{
     	border-radius: 0.5em;
     }
     h1{
     	font-style: italic;
     	color:rosybrown;
     }



	</style>
</head>
<body>
	<center>
		<h1>View_candidates</h1>
		<table border="1">
			<tr>
				<th>N <sup>0</sup></th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Gender</th>
				<th>Date_Birth</th>
				<th>Post_id</th>
				<th>Exam_Date</th>
				<th>Phone_number</th>
				<th>Marks</th>
			</tr>
		
	</center>

</body>
</html>

<?php
$number=1;
$selectt=mysqli_query($conn,"SELECT * FROM candidates_result");
while ($in=mysqli_fetch_array($selectt)) {?>
	<tr>
		<td><?php echo $number++;?></td>
		<td><?php echo $in['1'];?></td>
		<td><?php echo $in['2'];?></td>
		<td><?php echo $in['3'];?></td>
		<td><?php echo $in['4'];?></td>
		<td><?php echo $in['5'];?></td>
		<td><?php echo $in['6'];?></td>
		<td><?php echo $in['7'];?></td>
		<td><?php echo $in['8'];?></td>

	</tr>
<?php }
?>
























</table>