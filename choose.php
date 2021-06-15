<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$conn = mysqli_connect('localhost', 'root', '', 'lc') or die(mysqli_error($conn));


?>

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
    background-color: #09FBD3;
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
      25%  {background: #09FBD3;}
      75%  {background: #83F52C;}
      100% {background: #FF6600;}
      }
			  
.button {
  background-color : green;
  color: white;
  font-size: 27px;
  padding: 35px 40px;
  border-radius: 7px;
  border-color: black;
  display: inline-block;
  border: none
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
}

#button {
  position: fixed;
  bottom: 150px;
  right: 450px;
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

			  
.b {
  background-color : green;
  color: white;
  font-size: 27px;
  padding: 35px 80px;
  border-radius: 7px;
  border-color: black;
  display: inline-block;
  border: none
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
}

#b {
  position: fixed;
  bottom: 150px;
  right: 180px;
        }
		
.b span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.b span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.b:hover span {
  padding-right: 25px;
}
.b:hover span:after {
  opacity: 1;
  right: 0;
}			  


.bu {
  background-color : green;
  color: white;
  font-size: 27px;
  padding: 35px 80px;
  border-radius: 7px;
  border-color: black;
  display: inline-block;
  border: none
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
}

#bu {
  position: fixed;
  bottom: 120px;
  right: 280px;
        }
		
.bu span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.bu span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.bu:hover span {
  padding-right: 25px;
}
.bu:hover span:after {
  opacity: 1;
  right: 0;
}	
 </style>
</head>
<body>
<body class="animate-me">

<center>
<br></br>
<h1> WELCOME TO GOVERNMENT POLYTECHNIC MUMBAI</h2>
<br></br>
<br></br>
<div id="button"><button class="button" style="vertical-align:middle"  onClick="window.location='barcode.php';"><span>Leaving Certificate </span></button>
<br></br>
<br></br>
<br></br>
<div id="b"><button class="b" style="vertical-align:middle"  onClick="window.location='barcode1.php';"><span>Bonafide </span></button>
<br></br>
<br></br>
<br></br>
<div id="bu"><button class="bu" style="vertical-align:middle"  onClick="window.location='barcode2.php';"><span>Train Consession </span></button>
<br></br>

</body>
</html>
