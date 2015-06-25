<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Check Status</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- start header -->
<div id="header">
	
</div>
<!-- end #header -->
<div id="page">
	<div id="content">
		<div class="post">
		<h1 class="title">Check Status </h1>
		
<?php

$link = mysql_connect("localhost", "root", "");
        if (!$link) {
          echo "<p>Could not connect to the server </p>\n";
            echo mysql_error();
        }else{
       //     echo "<p>Successfully connected to the server </p>\n";
         
        }
		
		$dbcheck = mysql_select_db('fir');
        if (!$dbcheck) {
            echo mysql_error();
        }else{
         //   echo "<p>Successfully connected to the database '" . "comments" . "'</p>\n";
		 }
		 
		 
		 
		  if($_SESSION['in']==1)
		 {
		 echo"Please login to continue";
		 }
		 
else{		
	 
	 
	 echo"       <p align=\"right\"><a href=\"logout.php\">LogOut</a></p>";
		 
		 




			
echo"<form action=\"status.php\" method=\"POST\">";
echo"Fir No : <input type=\"text\"  name=\"firno\"/><br /><br />";
echo"Topic :  &nbsp;<select  name=\"topic\" style=\"margin-right: 0.5em; ";
			echo"	vertical-align: middle;";
				echo"border-top: solid 1px #000000;";
				echo"border-right: solid 1px #777777;";
				echo"border-bottom: solid 1px #777777;";
				echo"border-left: solid 1px #000000;";
				
				
				echo"padding: 0.15em;";
				echo"width: 11.0em;\">";

					echo"<option>Child Abuse</option>";
					echo"<option  >Child Labor</option>";
					echo"<option  >Corruption</option>";
					echo"<option  >Domestic violence</option>";
					echo"<option  >Extortion</option>";
					echo"<option  >Goods Stolen</option>";
					echo"<option  >Harrassment</option>";
                    echo"<option  >Kidnapping</option>";
                    echo"<option  >Mobile Theft</option>";
                    echo"<option  >Murder</option>";
                    echo"<option  >Rape</option>";
                    echo"<option  >Robbery</option>";
			echo"</select><br /><br />";
echo"<input type=\"submit\"  value=\"Check Status\"/>";
echo"</form>";



}
	?>	
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<div id="menu" class="box">
			<h2 class="title">Menu</h2>
			<ul>
				<li class="first"><a href="index.php"><img src=images/home.jpg /></a></li>
				<li><a href="userhome.php">Home</a></li>
				<li><a href="filefir.php">File FIR</a></li>
				<li><a href="check status.php">Check Status</a></li>
				<li><a href="complain.php">Feedback</a></li>
				<!--<li><a href="#">Support</a></li>-->
				<li><a href="about us.html">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
		<div id="updates" class="box">
			<h2 class="title">Current Stories</h2><br />
			<marquee scrollamount="4" direction="up" onmouseover="this.stop();" onmouseout="this.start();" height="350px"><ul>
				<li class="first">
					<h3>January 31, 20012</h3>
					<p>Adarsh: CBI arrests 4, including retd Army Brigadier, in Mumbai </p>
				</li>
				<li>
					<h3>January 26, 2012</h3>
					<p>Hacker 'KhantastiC' attacks government websites</p>
				</li>
				<li>
					<h3>January 22, 2012</h3>
					<p>Rapist tuition teacher arrested in Ghaziabad</p>
				</li>
				<li>
					<h3>January 17, 2012</h3>
					<p>State govt dithers over action against babus in Adarsh case</p>
				</li>
				<li>
					<h3>January 14, 2012</h3>
					<p>Amendments to NCTC defeated in Rajya Sabha</p>
				</li>
				<li>
					<h3>January 14, 2012</h3>
					<p>'Agent Vinod' banned by censor board in Pakistan</p>
				</li>
			</ul>
			</marquee>
		</div>
		<!-- end #updates -->
	</div>
	<!-- end #sidebar -->
	<div style="clear: both;">&nbsp;</div>

<!-- end #page -->
<div id="footer">
	<p>copyright &copy; 2012</p>
</div>
</div>
<!-- end #footer -->
</body>
</html>