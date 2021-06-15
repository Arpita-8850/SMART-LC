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
			
             Workshop status			
			<input type='radio' name='choose' value='yes'> Yes
			<input type='radio' name='choose' value='no'> No<br>
			<br>
			
		     Amount <input type="text" name="woa" style="font-size:20px;" value="<?php echo $_GET['woa']; ?>" ></p><br>
			<br>
			
		    Comment<input type="text" name="woc" style="height:100px; width:200px;" value="<?php echo $_GET['woc']; ?>"> </p><br>
			<br>
			<input type="submit" name="submit" value="Update"/>
			
		</form>

		<?php
		
		 $rollno = $_GET['rn'];
			$name = $_GET['sn'];
			echo $rn;
			$q = "SELECT workshopstatus,woa,woc FROM students WHERE rollno='$rollno'";
			$d = mysqli_query($conn, $q);
			$row = mysqli_fetch_assoc($d);
			
			$workshopstatus = $row["workshopstatus"];
			$woa = $row["woa"];
			$woc = $row["woc"];
			
			if($_POST['submit'])
			{
				if($_REQUEST["choose"] == "yes") {
					$workshopstatus = "Yes";
			    } else if($_REQUEST["choose"] == "no") {
					$workshopstatus = "No";
			    }
				
				$woa = $_POST["woa"];
				$woc = $_POST["woc"];
			
				$query = "UPDATE students SET WORKSHOPSTATUS='$workshopstatus' , woa='$woa' , woc='$woc' WHERE ROLLNO='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:workshop.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='workshop.php'>Move to Main Page</a>";
				}
			}
		?>


	</body>
<html>