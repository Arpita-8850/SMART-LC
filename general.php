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
<body >
<body background="im.jpg">

<?php
$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($connect));
error_reporting(0);
$query = "SELECT * FROM general";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{
 ?>
 
 
<center>
	<h1>General Information Section</h1>

<table id="customers">
	<tr>
		<th>Roll no.</th>
		<th>Name</th> 
		<th>Mother name</th>
		<th>Date of Birth</th>
	    <th>Branch</th>
	    <th>Date of admission</th>
	    <th>Date of leaving Institute</th>
		<th>Remark</th>
		<th>Reason for leaving Institude</th>
	    <th>Religion</th>
		<th>Nationality</th>
		<th>Place of Birth</th>
		<th>Institute Last Attended</th>
		<th></th>
	</tr>
	
	<?php

	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
		       <td>".$result['rollno']."</td>
		       <td>".$result['name']."</td> 
		       <td>".$result['mothername']."</td>
			   <td>".$result['dob']."</td> 
			   <td>".$result['branch']."</td> 
			   <td>".$result['doa']."</td> 
			   <td>".$result['dol']."</td>
			   <td>".$result['remark']."</td> 
			   <td>".$result['RforLI']."</td> 
			   <td>".$result['religion']."</td>
			   <td>".$result['nation']."</td>
			   <td>".$result['pob']."</td>
		       <td>".$result['ila']."</td>
			   <td><a href='UpdateGeneral.php?rn=$result[rollno]&sn=$result[name]&mn=$result[mothername]&dob=$result[dob]&b=$result[branch]&doa=$result[doa]&dol=$result[dol]&rm=$result[remark]&RforLI=$result[RforLI]&re=$result[religion]&na=$result[nation]&pob=$result[pob]&ila=$result[ila]'>Edit</a></td>

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