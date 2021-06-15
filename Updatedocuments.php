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
	p {
		font-size:20px;
	}
	</style>
	</head>
	<body>
   <body background="ig.jpg">

	<center>

		<form action="" method="POST">
			<p class="normal" style="font-size:30px;">  <?php echo $_GET['rn']; ?></P>
            <p class="normal" style="font-size:30px;"> <?php echo $_GET['sn']; ?></p>
			
           <p> School LC Received <input type='radio' name='schoollc' value='yes'> Yes <input type='radio' name='schoollc' value='no'> No</p>
			<br>
			<p>3 year fee receipt <input type='radio' name='fees' value='yes'> Yes <input type='radio' name='fees' value='no'> No</p>
			<br>
            <p>All KT cleared  <input type='radio' name='kt' value='yes'> Yes <input type='radio' name='kt' value='no'> No</p>
			<br>
            <p>All Documents Verified<input type='radio' name='docs' value='yes'> Yes <input type='radio' name='docs' value='no'> No</p>
			<br>
			<input type="submit" name="submit" value="Update"/>
			</form>
		
		
			<?php
				$hoc = $row["hoc"];
			if($_POST['submit'])
			{
				if($_REQUEST["schoollc"] == "yes") {
					$lcstatus = "Yes";
				} else {
					$lcstatus = "No";
				}
				
				if($_REQUEST["fees"] == "yes") {
					$feestatus = "Yes";
				} else {
					$feestatus = "No";
				}
				
				if($_REQUEST["kt"] == "yes") {
					$ktstatus = "Yes";
				} else {
					$ktstatus = "No";
				}
					if($_REQUEST["ds"] == "yes") {
					$documentstatus = "Yes";
				} else {
					$documentstatus = "No";
				}
				
				$query = "UPDATE students SET NAME='$name' , LCSTATUS='$lcstatus' , FEESTATUS='$feestatus' , KTSTATUS='$ktstatus' , DOCUMENTSTATUS='$documentstatus' WHERE ROLLNO='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:documents.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='documents.php'>Move to Main Page</a>";
				}
			}
		?>



</body>
</html>