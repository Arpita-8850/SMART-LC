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
			

		     LC number <input type="text" name="sr" style="font-size:20px;" value="<?php echo $_GET['sr']; ?>"><br>
			<br>
			
		     LC Taken <input type="text" name="gpmlc" style="font-size:20px;" value="<?php echo $_GET['lc']; ?>"><br>
			<br>
			
			Date<input type="date" name="date" style="height:40px;width:200px;" value="<?php echo $_GET['da']; ?>"><br>
			<br>
			
			Time<input type="time" name="time" style="height:40px; width:200px;" value="<?php echo $_GET['ti']; ?>"><br>
			<br>


			<input type="submit" name="submit" value="Update"/>
			
		</form>

		<?php
		
		    $rollno = $_GET['rn'];
			$name = $_GET['sn'];
			echo $rn;
			$q = "SELECT sr,gpmlc,date,time FROM students WHERE rollno='$rollno'";
			$d = mysqli_query($conn, $q);
			$row = mysqli_fetch_assoc($d);
			
			$sr = $row["sr"];
			$gpmlc = $row["gpmlc"];
			$date = $row["date"];
			$time = $row["time"];
			
			if($_POST['submit'])
			{
				$sr = $_POST["sr"];
				$gpmlc = $_POST["gpmlc"];
				$date = $_POST["date"];
				$time = $_POST["time"];
			
		
				$query = "UPDATE students SET sr='$sr', gpmlc='$gpmlc' , date='$date' , time='$time' WHERE rollno='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data)
				{
					header('Location:lc.php');
					exit;
				}
				else
				{
					echo"not updated. <a href='lc.php'>Move to Main Page</a>";
				}
			}
		?>


	</body>
<html>