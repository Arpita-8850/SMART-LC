	<?php

		
	$conn = mysqli_connect('localhost', 'root', '', 'lc');

	session_start();
	$rollno = $_SESSION['rollno'];
	echo $rollno;

	 
	$sql = "UPDATE bonafide SET class='2' WHERE rollno='$rollno'";
	 
	if(mysqli_query($conn,$sql))
	{
		header('Location:month.php');
		exit;
	}
	else 
	{
		echo 'data not updated';
		header('Location:choose.php');
		exit;
	}
	
	
	?>
		