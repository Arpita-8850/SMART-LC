<?php
	$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "SELECT Password FROM users WHERE Email = '$email'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) == 0){
		echo "incorrect email";
	} else {
		$databasePassword = mysqli_fetch_assoc($result)["Password"];
		if($password == $databasePassword) {	
			$selectQuery = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
			$selectResult = mysqli_query($conn,$selectQuery);
			$type = mysqli_fetch_assoc($selectResult)["Type"];
			echo $type;
			
			if($type=='library') {
				header('Location:library.php');
				exit;
			} else if($type=='hostel') {
				header('Location:hostel.php');
				exit;
			}  else if($type=='department') {
				header('Location:department.php');
				exit;
			} else if ($type=='workshop') {
				header('Location:workshop.php');
				exit;
			} else if ($type=='documents') {
				header('Location:documents.php');
				exit;
			} else if ($type=='lc') {
				header('Location:lc.php');
				exit;
			} else {
				header('Location:general.php');
				exit;
			}			
		} else {
			echo "incorect password";
		}
	}
?>