<?php
include 'connect.php';
include 'menu.php';

$ddc=$_GET['post_id'];
$ss=mysqli_query($conn," SELECT * FROM Post where post_id='$ddc'");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add_candidate</title>
	<style type="text/css">
		fieldset{
			color: white;
			width: 6em;
			border-radius: 0.5em;
			margin-top: 3em;
		}
		h1{
			color: white;
		}
		input{
			border-radius: 0.5em;
			background-color:aliceblue;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="insert3.php">
			<fieldset>
				<h1>
					Add_candidate
				</h1>
				First_Name
				<br><br>
				<input type="text" name="first_name" required>
				<br><br>
				Last_Name
				<br><br> 
				<input type="text" name="last_name" required>
				<br><br>
                Gender
                <br>
                M<input type="radio" name="gender" value="M" required >&nbsp;&nbsp;
                F<input type="radio" name="gender" value="F" required><br><br>
                Birth_Date
                <br><br>
                <input type="date" name="date" required>
                <br><br>
                Post_Id<br><br>
<?php 
while ($inf=mysqli_fetch_array($ss)) {?>

                <input type="number" name="post_id" value='<?php echo $inf['0'];?>' readonly>
                <br><br>

    <?php } ?>
                  Exam_Date<br><br>
                <input type="date" name="exam_date" required>
                <br><br>
                Phone_Number
                <br><br>
                <input type="number" name="phone_number" required>
                <br><br>
                Marks
                <br><br>
                <input type="number" name="marks" required>
                <br><br>
                <input type="submit" name="add" value="Add_candidate">
				
			</fieldset>
		</form>
	</center>

</body>
</html>

