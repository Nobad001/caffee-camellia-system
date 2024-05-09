<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Report!</title>
	<style type="text/css">
	tr th{
    color: rgb(0, 0, 0);
    box-shadow: 4px solid rgb(255, 0, 0);
}
     tr td{
        color: rgb(255, 255, 255);
    box-shadow: 4px solid rgb(0, 0, 0);
}
table{
    border-radius: 0.5em;
    border-left: none;
}
     h1{
     	font-style: italic;
     	color:rosybrown;
     }
     i{
     	color: white;
     }
     form{
     	margin-top: 3em;
     }
     input{
     	border-radius: 0.5em;
     }
     i: hover{
     	background-color: orangered;
     	padding: 0.5em;
      transition: 1s;
     }
     .w2: hover{
     	background-color: orangered;
     	padding: 0.5em;
      transition: 1s;
     }
     body{
    background: linear-gradient(45deg,rgb(202, 188, 188),rgb(228, 159, 159),rgb(202, 188, 188));
}

	</style>

</head>
<body>
   <a href="report.php">Back</a>
	<center>
	  <table border="1">
			<tr>
				<th>Name</th>
				<th>Post_Name</th>
				<th colspan="2">Candidate_Name</th>
				<th>Marks</th>
                <th>decision</th>
			</tr>
	</center>

</body>
</html>


<?php
if(isset($_POST['report'])) {
	$p_name=$_POST['name'];
$number=1;
$sel=mysqli_query($conn,"SELECT  p.post_name, c.marks, c.first_name,
c.last_name FROM Post p JOIN  candidates_result c ON p.post_id= c.post_id WHERE p.post_name='$p_name'
order by c.marks desc" );
while($data=mysqli_fetch_array($sel)){?>
        <tr>
        <td><?php echo $number++;?></td>
		<td><?php echo $data['post_name'];?></td>
		<td><?php echo $data['first_name'];?></td>
		<td><?php echo $data['last_name'];?></td>
		<td><?php echo $data['marks'];?></td>
       <td>
<?php
if ($data['marks']>70) {
    echo "Pass";
}
else{
    echo "Fail";
}

 }
  }

  ?></td>
  </tr> 

  </table>
  <p  class="s" onclick="window.print()"><i>Download..</i></p>



