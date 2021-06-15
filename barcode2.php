<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysqli_connect('localhost', 'root', '', 'lc') or die(mysqli_error($conn));


?>

<!DOCTYPE html>
<html>
<head>
<style>

.animate-me {
  -webkit-animation: bgcolorchange 10s infinite; 
  animation: 10s infinite bgcolorchange;
  
}

@keyframes bgcolorchange {
  0% {
    background-color: #FF0099;
  }
  25% {
    background-color: #F3F315;
  }
  50% {
    background-color: #83F52C;
  }
  75% {
    background-color: #FF6600;
  }
  100% {
    background-color: #FF0099;
  }
}

     @-webkit-keyframes bgcolorchange {
      0%   {background: #FF0099;}
      25%  {background: #F3F315;}
      75%  {background: #83F52C;}
      100% {background: #FF6600;}
      }
	  
	  
 		
.submit {
  background-color : green;
  color: white;
  font-size: 17px;
  padding: 20px 30px;
  border-radius: 4px;
  border-color: green;
       }
#button {
  position: fixed;
  bottom: 50px;
  right: 160px;
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
  bottom: 50px;
  left: 160px;
         }

</style>
    <title></title>
</head>
<body> 
<body class="animate-me">

<center>
<img src="GPM.png" style="width:250px; height: 300px"/><br></br>
<form method="POST" action="class.php">

  Roll no. <input type="text" name="rollno"  style="font-size:20px"; autofocus="autofocus"/> <br><br>

	<div id="button"><input type="submit" name="submit" value="SUBMIT"class="submit" /></div> 
	<div id="mybutton"> <input type="button" name="cancel" value="BACK" class="cancel" onClick="window.location='choose.php';" />  </div>

   
</form>
</body>
</html>

