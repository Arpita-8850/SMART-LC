<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>


  body {
        margin-right: 10px;
		margin-left: 30px;
	    margin-top: 15px;
        }	
   #gpm {
        position: relative;
        }
        #gpm img {
        width: 100x;
        height: 100px;
        position: absolute;
        top: -29px;
        right: 700px;
        }
		
	h1 {
		font-size: 29px;
        }
	h2 {
		font-size: 13px;
	   }
	   
	 p {
	   font-size: 25px;
	   line-height: 15%;
       }
		
   #paytm {
        position: relative;
        }
  #paytm img {
        width: 160px;
        height: 100px;
        position: absolute;
        top: 25px;
        left: 50px;
        }
		
   #upi {
        position: relative;
        }
   #upi img {
        width: 180px;
        height: 80px;
        position: absolute;
        top: 40px;
        right: 310px; 
        }	
		
   #google {
       position: relative;
       } 
   #google img {
       height:120px;
       width: 120px;
       position: absolute;
       top: 30px;
       right:110px;
       }	
	
   #pay {
        position: relative;
        }
   #pay img {
        width: 240x;
        height: 240px;
        position: absolute;
		top: -250px;
        right: 280px;
        }
		
	h3 {
		color: red;
        font-size: 30px;
	   }
	   
   .cancel {
	  position: absolute;
      background-color : red;
      color: white;
	  font-size: 19px;
	  border-radius: 4px;
      border-color: red;
	  top: 1320px;
	  padding: 17px 27px;
       }
		 
	</style>
	
	
	 <a href="fetching.php"></a>
	 
	<?php
		$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
		error_reporting(0);		
	?>

	<body>
	    <div id="gpm"><img src="gpm.png"/></div>
		<h1 class="normal"style="margin-top: 60px"><center> GOVERNMENT POLYTECHNIC MUMBAI </center></h1>
		<h2 class="normal"style="margin-top: 5px"><center> 49, ALI YAVAR JUNG MARG, KHERWADI, BANDRA EAST, MUMBAI, MAHARASHTRA (400051) </center></h2>
	    <br>
    	<hr>
		<hr>
		<br>
	    <p class="normal"><font face="calibri">GPM provides following online transactions:</p>

		<div id="paytm"> 
		<img src="paytm.jpg" />
		</div>
		<div id="upi"> 
		<img src="UPI.png" />
		</div>
		<div id="google"> 
		<img src="google.png"/>
		</div>
		
	<br>
    <div id="pay"><img src="pay.png"/></div>
	<h3 style="margin-top: 405px"><font face="calibri"><center><strong> QR CODE for paytm</strong><center></h3>
	<BR>
	<h3><font face="calibri"><strong>Online Payment Details:</strong></h3>
	<p class="normal" style="margin-top: 30px"><font face="calibri">Account Name: GPM</p>
	<p class="normal" style="margin-top: 35px"><font face="calibri">Mobile number: +91  9860412268</p>
	<p class="normal" style="margin-top: 40px"><font face="calibri">Bank Account No. / UPI ID: 3704 0044 0532 0130</p>
	<p class="normal" style="margin-top: 45px"><font face="calibri">IFSC Code:  SBIN0005943</p>
	<br>
	<h3><font face="calibri"><strong>Demand Draft:</strong></h3>
	<p class="normal"><font face="calibri">Name: Principle Government Polytechnic Mumbai</p>
	<br>
	<h3><font face="calibri"><strong>Cash Payment:</strong></h3>
	<p class="normal"><font face="calibri">Contact to the faculty of respective departments.</p>
	<br></br>
	<br>
	
	<div style="margin-right:800px;" > 
		<input  id="cancelbutton" type="button" name="cancel" value="BACK" class="cancel" onClick="window.location='choose.php';"/>  
		</div>
		
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	