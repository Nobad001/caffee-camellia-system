<?php
include 'connect.php';
include 'menu.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View_Post!</title>
<style type="text/css">
	
	th{
		color:darkkhaki;
	}
	.w2{
		
		font-size: 10px;
	}
		.w1{
		
		color:ghostwhite;
	}
	.w2:hover{
		
		padding: 10.5px;
		transform: 2s;
	}
   table{
   	border-radius: 0.5em;

   }
   .w3{
   	color: white;

   }

   h1{
   	color: darkgoldenrod;
   	font-style: italic;
   }
   		input{
			border-radius:0.5em ;
			background-color:deepskyblue;
		}
		a:hover{
			color:fuchsia;
			padding: -10px;
			transform: 1s;
			transition:1s; 
		}
</style>
</head>
<body>
	<center>
		<h1>View_Post!</h1>
	
		<table border="">
			<tr>
				<th>N <sup>0</sup></th>
				<th>Post_Name</th>
				<th colspan="3">Option</th>
			</tr>
		

	</center>

</body>
</html>
<?php
$number=1;
$select=mysqli_query($conn,"SELECT * FROM Post");
while ($data=mysqli_fetch_array($select)) {?>
<tr>

	<td class="w1"><?php echo $number++;?></td>
	<td class="w3"><?php echo $data['1'];?></td>
	<td class="w2"><a href="delete.php?post_id=<?php echo $data['0'];?>">Delete</td>
	<td class="w2"><a href="modify.php?post_id=<?php echo $data['0'];?>">Modify</td>
	<td class="w2"><a href="add_candidate.php?post_id=<?php echo $data['0'];?>">Add_Candidate</td>
</tr>

<?php }

?>


</table>