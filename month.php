<!DOCTYPE html>
<html>
<head>
<style>
p.normal {
  font-weight: bold;
}

#note {
  position: absolute;
  bottom: 120px;
  left: 190px;
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
body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: black;
}

.glow-on-hover {
    width: 220px;
    height: 50px;
		font-size: 20px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.cancel {
  background-color : black;
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
				$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
		                 error_reporting(0);
		
		                session_start();
		                $rollno = $_SESSION['rollno'];
		
	                    $query = "SELECT * FROM bonafide WHERE rollno='$rollno'";
		                $data = mysqli_query($conn, $query);
		
		                $row = mysqli_fetch_assoc($data);
						?>
						
						 <h1 class="normal" name="rollno" style="font-size:40px; float: left; margin-bottom: 490px; margin-left: 20px; color:white; "> <?php echo $row['rollno']; ?> </h1>
			             <h2 class="normal" name="name" style=" font-size:40px; float: right; margin-bottom: 490px;margin-right: 100px; color:white;"> <?php echo $row['name']; ?> </h2>
						 <p class="normal" style="font-size:30px; float: right; margin-top: 160px; margin-right: 60px; color:white;">Select Period: - </p>

						 <br></br>
						 <div><form action="1month.php"  method="post"><button class="glow-on-hover"style="margin-top: 40px"><strong>1 Month</strong></button> </form></div>
					    <div><form action="3month.php"    method="post"><button class="glow-on-hover" style="margin-top: 70px"><strong>3 Month</strong></button> </form></div>								
						
						
					<div id="mybutton"> <input type="button" name="cancel" value="CANCEL" class="cancel" onClick="window.location='choose.php';" />  </div>
				    </form>

 </center>
	</body>
	</html>