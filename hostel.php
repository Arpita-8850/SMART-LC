<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
error_reporting(0);
$query = "SELECT name,rollno,hostelstatus,hoa,hoc FROM students";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{

?>


<!DOCTYPE html>
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

<center>
	<h1>Hostel</h1>
<table id="customers">
	<tr>
		<th>Roll no.</th>
		<th>Name</th> 
		<th>Damage fees</th>
		<th>Amount</th>
	    <th>Comment</th>
		<th></th>
	</tr>
	
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
		       <td>".$result['rollno']."</td>
		       <td>".$result['name']."</td> 
		       <td>".$result['hostelstatus']."</td>
			   <td>".$result['hoa']."</td>
			   <td>".$result['hoc']."</td>
			   <td><a href='UpdateHostel.php?rn=$result[rollno]&sn=$result[name]&hs=$result[hostelstatus]&hoa=$result[hoa]&hoc=$result[hoc]'>Edit</a></td>

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