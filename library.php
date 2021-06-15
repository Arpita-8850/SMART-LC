<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
error_reporting(0);
$query = "SELECT name,rollno,librarystatus,lia,lic,lib,lin FROM students";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{

?>

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
	<h1>Library</h1>
<table id="customers">
  <tr>
    <th>Roll no</th>
    <th>Name</th>
    <th>Dues</th>
	<th>Amount</th>
	<th>Book name</th>
	<th>Book number</th>
	<th>Author name</th>
	 <th></th>
	
  </tr>
  
  
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
		       <td>".$result['rollno']."</td>
		       <td>".$result['name']."</td> 
		       <td>".$result['librarystatus']."</td>
			   <td>".$result['lia']."</td>
			   <td>".$result['lic']."</td>
			   <td>".$result['lib']."</td>
			   <td>".$result['lin']."</td>
			   <td><a href='UpdateLibrary.php?rn=$result[rollno]&sn=$result[name]&ls=$result[librarystatus]&la=$result[lia]&lc=$result[lic]&lb=$result[lib]&ln=$result[lin]'>Edit</a></td>

	        </tr>";
	}
}
else
{
	echo "No data found";
}

?>
</table>

</body>
</html>
