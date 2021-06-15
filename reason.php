<!DOCTYPE html>
<html>
<head>
<style>
p.normal {
  font-weight: bold;
}

#note2 {
  position: absolute;
  top: 200px;
  left: 30px;
  font-size: 35px;
  font-weight: bold; 
}

#r{
 width:450px;   
}

select:invalid { color: gray; }
		  
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
    top: 500px;
  right: 150px;
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

.cancel {
  background-color : red;
  color: white;
  font-size: 17px;
  padding: 20px 30px;
  border-radius: 4px;
  border-color: red;
        }
#mybutton {
  position: fixed;
  top: 500px;
  left: 150px;
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
								 
								$query = "SELECT * FROM bonafide WHERE rollno='$rollno' ";
								$query_run = mysqli_query($conn,$query);
								
								if(mysqli_num_rows($query_run) == 0) {
									echo '<div id="note2"> Your Roll number is not enrolled in the Server. Contact to the Faculty.</div>';
								} else {
									$row = mysqli_fetch_assoc($query_run);
						 
						?>
						
						 <h1 class="normal" name="rollno" style="font-size:30px; float: left;margin-left: 100px;"> <?php echo $row['rollno']; ?> </h1>
			             <h2 class="normal" name="name" style="font-size:30px; float: right;margin-right: 100px;"> <?php echo $row['name']; ?> </h2>
						 <br></br>
						 <p style="font-size:30px; margin-top:150px;">Reason for bonafide Certificate</p>
						<form action="bonafide.php" >
                            <select required name="reason" id="r" style="font-size:25px; margin-top:5px;">
							    <option value="" disabled selected hidden>Please Choose...</option>
                                <option value="reason" name="reason">Bus Concession</option>
                                <option value="reason" name="reason">Income Certificate</option>
                                <option value="reason" name="reason">Industrial visit for project work</option>
                                <option value="reason" name="reason">Educational loans</option>
                                <option value="reason" name="reason">Visa Applications</option>
                  			</select>
							<div id="button"><button type="submit" name="submit1"class="button" style="vertical-align:middle"><span>SUBMIT </span></button>
							
						</form>
						
						<?php
						
								}
							}
						?>
						
						<div id="mybutton"> <input type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='choose.php';" />  </div>

 </center>
	</body>
	</html>