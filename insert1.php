	<?php

		
	$conn = mysqli_connect('localhost', 'root', '', 'lc');

	session_start();
	$rollno = $_SESSION['rollno'];
	echo $rollno;

	 
	$sql = "UPDATE bonafide SET tc='Yes' WHERE rollno='$rollno'";
	 
	if(mysqli_query($conn,$sql))
	{
		header('Location:choose.php');
		exit;
	}
	else 
	{
		echo 'data not updated';
		header('Location:choose.php');
		exit;
	}
	
	
	?>
		