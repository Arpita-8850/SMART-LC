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
			
             Hostel status			
			<input type='radio' name='choose' value='yes'> Yes
			<input type='radio' name='choose' value='no'> No<br>
			<br>
			
		     Amount <input type="text" name="hoa" style="font-size:20px;" value="<?php echo $_GET['hoa']; ?>"></p><br>
			<br>
			
		    Comment<input type="text" name="hoc" style="height:100px; width:200px;" value="<?php echo $_GET['hoc']; ?>"> </p><br>
			<br>
			<input type="submit" name="submit" value="SUBMIT"/>
			
		</form>


		<?php
		
		    $rollno = $_GET['rn'];
			$name = $_GET['sn'];
			echo $rn;
			$q = "SELECT hostelstatus,hoa,hoc FROM students WHERE rollno='$rollno'";
			$d = mysqli_query($conn, $q);
			$row = mysqli_fetch_assoc($d);
			
			$hostelstatus = $row["hostelstatus"];
			$hoa = $row["hoa"];
			$hoc = $row["hoc"];
			
			if($_POST['submit'])
			{
				if($_REQUEST["choose"] == "yes") {
					$hostelstatus = "Yes";
			    } else if($_REQUEST["choose"] == "no") {
					$hostelstatus = "No";
			    }
				
				$hoa = $_POST["hoa"];
				$hoc = $_POST["hoc"];
			
		
				$query = "UPDATE students SET hostelstatus='$hostelstatus', hoa='$hoa' , hoc='$hoc' WHERE rollno='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:hostel.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='hostel.php'>Move to Main Page</a>";
				}
			}
		?>


	</body>
<html>