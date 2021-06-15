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
			
             Library status			
			<input type='radio' name='choose' value='yes'> Yes
			<input type='radio' name='choose' value='no'> No<br>
			<br>
			
		     Amount <input type="text" name="lia" style="font-size:20px;" value="<?php echo $_GET['lia']; ?>"><br>
			<br>
			
		    Book name<input type="text" name="lic" style="height:50px; width:200px;" value="<?php echo $_GET['lic']; ?>"><br>
			<br>
			
			Book number<input type="text" name="lib" style="height:50px; width:200px;" value="<?php echo $_GET['lib']; ?>"><br>
			<br>
			
			Author name<input type="text" name="lin" style="height:50px; width:200px;" value="<?php echo $_GET['lin']; ?>"><br>
			<br>


			<input type="submit" name="submit" value="Update"/>
			
		</form>

		<?php
		
		    $rollno = $_GET['rn'];
			$name = $_GET['sn'];
			echo $rn;
			$q = "SELECT librarystatus,lia,lic,lib,lin FROM students WHERE rollno='$rollno'";
			$d = mysqli_query($conn, $q);
			$row = mysqli_fetch_assoc($d);
			
			$librarystatus = $row["librarystatus"];
			$lia = $row["lia"];
			$lic = $row["lic"];
			$lib = $row["lib"];
			$lin = $row["lin"];
			
			if($_POST['submit'])
			{
				if($_REQUEST["choose"] == "yes") {
					$librarystatus = "Yes";
			    } else if($_REQUEST["choose"] == "no") {
					$librarystatus = "No";
			    }
				
				$lia = $_POST["lia"];
				$lic = $_POST["lic"];
				$lib = $_POST["lib"];
				$lin = $_POST["lin"];
			
		
				$query = "UPDATE students SET librarystatus='$librarystatus', lia='$lia' , lic='$lic' , lib='$lib' , lin='$lin' WHERE rollno='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:Library.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='library.php'>Move to Main Page</a>";
				}
			}
		?>


	</body>
<html>