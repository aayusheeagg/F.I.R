<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Feedback</title>
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
		<h1 class="title">Feedback</h1>
		<?php 	
			
			$link = mysql_connect("localhost", "root", "");
        if (!$link) {
          echo "<p>Could not connect to the server </p>\n";
           //
		   
		   
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
	 
	 
	 echo"       <p align=\"right\"><a href=\"coplogout.php\">LogOut</a></p>";
		 
			if($_SESSION['chk']==2)
			{
			echo"<font color=\"RED\" size=\"3px\" >Sorry You do not have any case with this fir no</font> ";
			echo"<br><br>";
			}
					
					
					
		echo"	<form  action=\"update.php\" method=\"post\">";
		
		echo" <b>FIR No &nbsp;&nbsp;</b>";
 echo"  <input type=\"text\" name=\"fno\" size=\"20\" maxlength=\"30\"><br><br />";
echo"<b>Accused Details :</b>";  echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br /><br /><textarea  style=\"size:40\" name=\"message\"  ></textarea><br /><br />";
		
		
			
			echo"<b>Status : </b> <br /><br />";
			echo"<input type=\"radio\" value=\"Pending\" name=\"status\"  checked=\"checked\"/> Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			
			echo"<input type=\"radio\" value=\"Analysed\" name=\"status\" /> Analysed";
		echo"	<br /><br />";
			echo"<input type=\"submit\" value=\"Update Status\"  />";
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
				<li><a href="cop.php">Home</a></li>
				<li><a href="copfeedback.php">Feedback</a></li>
				<li><a href="copcheck status.php">Check Status</a></li>
				<!--<li><a href="#">Forums</a></li>
				<li><a href="#">Support</a></li>-->
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