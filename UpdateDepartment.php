<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
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
		
		    <p class="normal" style="font-size:20px;">  <?php echo $_GET['rn']; ?></P>
            <p class="normal" style="font-size:20px;"> <?php echo $_GET['sn']; ?></p>		
			
             Department status			
			<input type='radio' name='choose' value='yes'> Yes
			<input type='radio' name='choose' value='no'> No<br>
			<br>
			
		     Amount <input type="text" name="dea" style="font-size:20px;" value="<?php echo $_GET['dea']; ?>"></p><br>
			<br>
			<input type="submit" name="submit" value="Update"/>
		
		</form>

		<?php
		
		
		 $rollno = $_GET['rn'];
			$name = $_GET['sn'];
			echo $rn;
			$q = "SELECT departmentstatus,dea FROM students WHERE rollno='$rollno'";
			$d = mysqli_query($conn, $q);
			$row = mysqli_fetch_assoc($d);
			
			$departmentstatus = $row["departmentstatus"];
			$dea = $row["dea"];
			
			if($_POST['submit'])
			{
				if($_REQUEST["choose"] == "yes") {
					$departmentstatus = "Yes";
			    } else if($_REQUEST["choose"] == "no") {
					$departmentstatus = "No";
			    }
				
				$dea = $_POST["dea"];
			
				$query = "UPDATE students SET departmentstatus='$departmentstatus' , dea='$dea' WHERE ROLLNO='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:department.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='department.php'>Move to Main Page</a>";
				}
			}
		?>
	</body>
<html>