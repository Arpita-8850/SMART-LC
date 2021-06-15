<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

	    body {
        height: 842px;
        width: 595px;
        margin-right: 20px;
		margin-left: 30px;
	    margin-top: 15px;
        }
		
		#border {
		border:solid;
		width: 650px;
		height: 1050px;
		padding-left:30px;
		padding-right:40px;
		}
			
	    #gpm {
        position: relative;
        }
        #gpm img {
        width: 85x;
        height: 85px;
        position: absolute;
        top: 13px;
        right: 585px;
        }
		
		.floated {
			float: left;
			margin-right: 100px;
			margin-bottom: 100px;
		}
		h1 {
			font-size: 25px;
        }
		  
		p {
		   font-size: 15px;
		   line-height: 15%;
          }
		 
		h2 {
			font-size: 35px;
           }
		
		h3 {
		 	font-size: 12px;
		   }
		  
		.cellLabel{
			padding-left: 30px;
		 }  
		.cellValue {
			padding-left: 90px;
		}
		
		#note {
        position: absolute;
        font-size: 15px;
		left: 80px;
		}
		
        #note-2 {
        position: absolute;
        font-size: 15px;
		top:820px;
		left: 70px;
		}
		
        #sign1 {
        position: relative;
              }
        #sign1 img {
        width: 100px;
        height: 80px;
        position: absolute;
        top: 25px;
        left: 50px;
        }
	
        #sign2 {
        position: relative;
        }
        #sign2 img {
        width: 100px;
        height: 80px;
        position: absolute;
        top: 25px;
        right: 110px;
        }	
		
	   #stamp {
       position: relative;
       } 
       #stamp img {
       height: 100px;
       width: 130px;
       position: absolute;
       top: 25px;
       right:300px;
       }	
		
	   p.b { 
       word-spacing: 140px;
	   float: right;
       margin-right: 130px;
	   font-size: 17px;
       }

      .print {
      position: absolute;
      background-color: green;
      color: white;
      font-size: 15px;
      border-color: green;
	  top: 1090px;
	  padding: 5px 10px;
	 
       }

      .cancel {
	  position: absolute;
      background-color : red;
      color: white;
	  font-size: 15px;
      border-color: red;
	  top: 1090px;
	  padding: 5px 10px;
       }
		
	</style>
	 <a href="fetching.php"></a>
	
	<?php
		$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
		error_reporting(0);
		
		
		session_start();
		$rollno = $_SESSION['rollno'];
				
		$query = "SELECT * FROM general WHERE rollno='$rollno'";
		$data = mysqli_query($conn, $query);
		
		$row = mysqli_fetch_assoc($data);
	  
		
	?>

	<body>
	
	    <div id=border>
	    <div id="gpm"><img src="gpm.png"/></div>
		<p class="normal"style="margin-left:500px; margin-top: 20px"><center>MAKING KNOWLEDGE TO WORK</center></p>
		<h1 class="normal"style="margin-top: 20px"><center> GOVERNMENT POLYTECHNIC MUMBAI </center></h1>
		<h3 class="normal"style="margin-top: 5px"><center> 49, ALI YAVAR JUNG MARG, KHERWADI, BANDRA EAST, MUMBAI, MAHARASHTRA (400051) </center></h3>
		<hr>
		<hr>
				
		<p style="margin-left:570px; margin-top: 10px; font-size:12px; position:absolute;">Date: <?php echo $row["dol"]; ?></p>
		<p style="margin-left: 570px; margin-top: 25px;  font-size:12px; position:absolute;">Sr No.: <?php echo $row["sr"]; ?> </p>
		
        <h2 class="normal"style="margin-top: 20px"><center>LEAVING CERTIFICATE</center></h2>
		<p class="normal"style="margin-bottom: 5px"><center>Certified that the following information is in accordance with the institute records</center></p>


		<div>
			<table cellspacing="6">
				<tr>
					<td class="cellLabel"> <p  style="text-align:right"> <p> <b> 1. Enrollment number: </b> </p> </td>
					<td class="cellValue"> <p id="rollno"><strong><?php echo $row["rollno"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b> 2. Name of student: </b> </p> </th>
					<td class="cellValue"> <p id="name"><strong><?php echo $row["name"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b> 3. Mother's Name: </b> </p> </th>
					<td class="cellValue"> <p id="motherName"><strong><?php echo $row["mothername"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b> 4. Religion: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["religion"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>5. Nationality: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["nation"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>6. Place of Birth: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["pob"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>7. Date of Birth: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["dob"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>8.Institute Last Attended:</b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["ila"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>9. Date of Admission:</b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["doa"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>10. Branch: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["branch"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>11. Remark: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["remark"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>12. Reason of leaving institute: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["RforLI"]; ?> </p> </td>
				</tr>
				<tr>
					<td class="cellLabel"> <p> <b>13. Date of Leaving institute: </b> </p> </th>
					<td class="cellValue"> <p id="dateOfBirth"><strong><?php echo $row["dol"]; ?> </p> </td>
				</tr>
			</table>
		</div>
		<br></br>
		<div id="note">No change in any entry in this certificate should be made except by the issuing authority.</div>
		<div id="note-2">Any infringrment of this requirement is liable to involve the imposition of a penalty to the extent of rustication.</div>
		<br></br>
		
		
		<div id="sign1"> 
		<img src="sign.png" />
		</div>
		
		<div id="stamp"> 
		<img src="clg.jpg" />
		</div>
		
		<div id="sign2"> 
		<img src="sign2.png"/>
		</div>
		
		 <p class="b" style="margin-top: 150px"><strong>Registrar Stamp Principal</p>
		
    </div>
	
		<div style="margin-left:600px">			
		<form action="insert.php"  method="post"><input id="printpagebutton" type="submit" name="print" value="PRINT" class="print" onclick="printpage()"/>  
        </form>
		</div>
		
		<div style="margin-right:800px;" > 
		<input  id="cancelbutton" type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='choose.php';"/>  
		</div>
		
<script>
  function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
		var cancelButton = document.getElementById("cancelbutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
		cancelButton.style.visibility = 'hidden';
        //Print the page content
        window.print();
		setTimeout("closePrintView()", 3000);
		cancelButton.style.visibility = 'visible';
        printButton.style.visibility = 'visible';
    }
	function closePrintView() {
        document.location.href = 'chooose.php';
    }	
</script>	

</body>
</html>