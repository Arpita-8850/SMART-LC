<!DOCTYPE html>
<html>
<head>
<style>
p.normal {
  font-weight: bold;
}

#note {
  position: absolute;
  bottom: 46px;
  left: 220px;
  font-size: 30px;
  font-weight: bold; 
}

#note2 {
  position: absolute;
  top: 200px;
  left: 30px;
  font-size: 35px;
  font-weight: bold; 
}

#note3 {
  position: absolute;
  bottom: 37px;
  right: 180px;
  font-size: 25px;
  font-weight: bold; 
}

th {
   font-size: 30px;
   opacity: 0.9;
   }
   
td {
 opacity: 0.9;
 font-size: 25px;
   }
			  
.button {
  background-color : green;
  color: white;
  font-size: 17px;
  padding: 20px 30px;
  border-radius: 7px;
  border-color: green;
  display: inline-block;
  border: none
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
}
.button {
  position: fixed;
    top: 525px;
  right: 80px;
        }
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button:hover span {
  padding-right: 25px;
}
.button:hover span:after {
  opacity: 1;
  right: 0;
}	


.button1 {
  background-color : BLUE;
  color: white;
  font-size: 17px;
  padding: 20px 30px;
  border-radius: 7px;
  border-color: black;
  display: inline-block;
  border: none
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
}
.button1 {
  position: fixed;
    top: 525px;
  right: 35px;
        }	  

.cancel {
  background-color : red;
  color: white;
  font-size: 17px;
  padding: 20px 30px;
  border-radius: 7px;
  border-color: red;
        }
#mybutton {
  position: fixed;
  top: 525px;
  left: 20px;
         }

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 2px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 8px;
  padding-bottom: 20px;
  text-align: left;
  background-color: #1261A0;
  color: white;
}
		
 </style>
</head>
<body>

<center>

							
                        <?php
							error_reporting(E_ALL ^ E_DEPRECATED);
							$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
							if(isset($_POST['submit']))
							{
								$rollno = $_POST['rollno'];
							  
								session_start();
								$_SESSION['rollno'] = $rollno;
								 
								$query = "SELECT * FROM students WHERE rollno='$rollno' ";
								$query_run = mysqli_query($conn,$query);
								
								if(mysqli_num_rows($query_run) == 0) {
									echo '<div id="note2"> Your Roll number is not enrolled in the Server. Contact to the Faculty.</div>';
								} else {
									$row = mysqli_fetch_assoc($query_run);
						 
						?>
								  
								    <p class="normal" style="font-size:35px; float: left;margin-left: 100px;">  <?php echo $row['rollno']; ?></P>
			                        <p class="normal" style="font-size:35px; float: right;margin-right: 100px;"> <?php echo $row['name']; ?></p>
                                <table id="customers" style=" width:70%;" >	
									<tr>
										<th>Section</th>
										<th>Status</th>
										<th>Amount</th>
									</tr>
									<tr>
										<td> Library Dues</td>
										<td> <?php echo $row['librarystatus']; ?> </td>
										<td> <?php echo $row['lia']; ?> </td>
									</tr>
									<tr>
										<td> Hostel Dues </td>
										<td> <?php echo $row['hostelstatus']; ?> </td>
										<td> <?php echo $row['hoa']; ?> </td>
									</tr>
								    <tr>
										<td> Workshop Dues </td>
										<td> <?php echo $row['workshopstatus']; ?> </td>
										<td> <?php echo $row['woa']; ?> </td>
									</tr>
									<tr>
										<td> Department Dues</td>
										<td> <?php echo $row['departmentstatus']; ?> </td>
										<td> <?php echo $row['dea']; ?> </td>
									</tr>
									<tr>
										<td> All Exam cleared </td>
										<td> <?php echo $row['ktstatus']; ?> </td>
										<td></td>
									</tr>
									<tr>
										<td> All Fees cleared </td>
										<td> <?php echo $row['feestatus']; ?> </td>
										<td></td>
									</tr>
									<tr>
										<td> Documents verified</td>
										<td> <?php echo $row['documentstatus']; ?> </td>
										<td></td>
									</tr>
								
								  
								   <form name="form" method="post" action="originalc.php">

								  
						<?php    
							
									if($row['librarystatus']=="Yes" 
										&& $row['hostelstatus']=="Yes" 
										&& $row['workshopstatus']=="Yes" 
										&& $row['departmentstatus']=="Yes"
										&& $row['ktstatus']=="Yes"
										&& $row['documentstatus']=="Yes") {
											
										if($row['gpmlc']=="Yes") {
											echo '<div id="note">Your LC had already been printed</div>';
										} else {
											echo '<div id="button"><button class="button" style="vertical-align:middle"><span>SUBMIT </span></button>';
										}
									} else { 
										echo '<div id="note3">Dues not completed/documents not verified </div>';
										echo '<div id="button1"><a class="button1" style="vertical-align:middle" href="payment.php"><strong>PAYMENT</strong></a>';

									}
								}
							}
						?>
								
						
								<div id="mybutton"><strong> <input type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='choose.php';" /> </strong> </div>
							</form>
						
							  			  
		  </table>
	   </center>
	</body>
	</html>