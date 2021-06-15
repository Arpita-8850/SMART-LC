<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid white;
  padding: 15px;
   color: white;
}

h1 {
	 color: white;
	 font-size: 50px;
}

#customers tr:nth-child(even)

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  color: white;
   font-size: 30px;
}

#customers td {
   font-size: 23px;
}
</style>
</head>
<body>
<body background="im.jpg">

<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
error_reporting(0);
$query = "SELECT RollNo,Name,lcstatus,feestatus,ktstatus,documentstatus FROM students";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{

   ?>
<center>
	<h1>Documents Section</h1>
   <table id="customers">
	<tr>
		<th>RollNo</th>
		<th>Name</th> 
		<th>School LC recieved</th>
		<th>3 year fee receipt</th>
		<th>All KT cleared</th>
		<th>All Documents verified</th>
		<th></th>
	</tr>
	
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
		        
				 <td> ".$result["RollNo"]." </td>
				 <td> ".$result["Name"]." </td>
		         <td> ".$result['lcstatus']."</td>
				 <td> ".$result['feestatus']."</td>
				 <td> ".$result['ktstatus']."</td>
				 <td> ".$result['documentstatus']."</td>
			     <td> <a href='Updatedocuments.php?rn=$result[RollNo]&sn=$result[Name]&lcs=$result[lcstatus]&fs=$result[feestatus]&kts=$result[ktstatus]&ds=$result[documentstatus]'>Edit</a></td>

	        </tr>";
	}
}
else
{
	echo "No data found";
}

?>
</table>
</html>