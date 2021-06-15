<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($connect));
	error_reporting(0);
?>

<html>
	<head>
		<style>
	body {
		  background-repeat: no-repeat;
		
		   background-size: cover;
	}
	</style>
	</head>
	<body>
    <body background="ig.jpg">
	<center>

		<form action="" method="POST">
			Roll No <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"/><br><br>
			Name <input type="text" name="name" value="<?php echo $_GET['sn']; ?>"/><br><br>
			mother name <input type="text" name="mothername" value="<?php echo $_GET['mn']; ?>"/><br><br>
			Date of birth <input type="text" name="dob" value="<?php echo $_GET['dob']; ?>"/><br><br>
			Branch <input type="text" name="branch" value="<?php echo $_GET['b']; ?>"/><br><br>
			Date of admission <input type="text" name="doa" value="<?php echo $_GET['doa']; ?>"/><br><br>
			Date of leaving institute <input type="text" name="dol" value="<?php echo $_GET['dol']; ?>"/><br><br>
			Remark <input type="text" name="remark" value="<?php echo $_GET['rm']; ?>"/><br><br>
			Reason for leaving institute <input type="text" name="RforLI" value="<?php echo $_GET['RforLI']; ?>"/><br><br>
			
			Religion <input type="text" name="religion" value="<?php echo $_GET['re']; ?>"/><br><br>
			Nation <input type="text" name="nation" value="<?php echo $_GET['na']; ?>"/><br><br>
			Place of Birht<input type="text" name="pob" value="<?php echo $_GET['pob']; ?>"/><br><br>
			Last Institute Attended <input type="text" name="ila" value="<?php echo $_GET['ila']; ?>"/><br><br>
			
			<input type="submit" name="submit" value="Update"/>
		</form>

		<?php
			if($_POST['submit'])
			{
				$rollno = $_POST['rollno'];
				$name = $_POST['name'];
				$mothername = $_POST['mothername'];
				$dob = $_POST['dob'];
				$branch = $_POST['branch'];
				$doa = $_POST['doa'];
				$dol = $_POST['dol'];
				$remark = $_POST['remark'];
				$RforLI = $_POST['RforLI'];
				$religion = $_POST['religion'];
				$nation = $_POST['nation'];
				$pob = $_POST['pob'];
				$ila = $_POST['ila'];
				
				$query = "UPDATE general SET NAME='$name' , MOTHERNAME='$mothername' , DOB='$dob' , BRANCH='$branch' , DOA='$doa' , DOL='$dol' , REMARK='$remark' , RFORLI='$RforLI' , RELIGION='$religion' , NATION='$nation' , POB='$pob' , ILA='$ila' WHERE ROLLNO='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:general.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='general.php'>Move to Main Page</a>";
				}
			}
		?>


	</body>
<html>