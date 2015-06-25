<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home | User</title>
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
		<h1 class="title">FIR's on Files </h1>
		
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
		 
		// echo $_SESSION['in'];
		 if($_SESSION['in']==1)
		 {
		 echo"Please login to continue";
		 
		 }
		 
else{		

echo"<p align=\"right\"><a href=\"logout.php\">LogOut</a></p>"; 
			$cnt=mysql_query("select * from firs where firno>0 order by firno desc");
			
			
			echo"<table width=\"400\" border=\"1\" cellspacing=\"0\"cellpadding=\"5\">";
			echo"<tr align=center><th scope=\"col\" height=\"40px\"><strong>S. No.</strong></th>";
		//	echo"<th scope=\"col\" height=\"40px\"><strong>Fir No.</strong></th>";
			echo"<th scope=\"col\" height=\"40px\"><strong>TOPIC</strong></th>";
    		echo"<th scope=\"col\" height=\"40px\"><strong>DATE</strong></th></tr>";

    
  $sno=1;
  $count=1;
			
			while(($row = mysql_fetch_array( $cnt ))&& $count<=8 ) {
				$count++;
    			$fno=$row['firno'];
				
					//$count++;
					//echo"<h3>January 31, 2008</h3>";
				
					
					//$_SESSION['name']=$fno;
					echo"<tr height=\"60px\"><td><div align=\"center\">";
					echo $sno;
					echo"</div></td>";
					
					echo "<td><div align=\"center\">";
					echo" <a href=\"usersession.php?fn=$fno\">";
					echo $row['topic'];
					echo"</a></div></td>  <td><div align=\"center\">";
					echo $row['todaydate'];
					echo"</div></td></tr>";
				$sno++;
					
					

				
					
				/*	$cnt1=mysql_query("select * from comments where firno=$fn");
			echo"<ul  >";
			while($row1 = mysql_fetch_array( $cnt1 )) {
			echo $row1['cmnt'];
			
			
			}*/
					}
					echo"</table>";
			
			
			
			
			/*
			echo"<ul  >";
			$fn;
			while($row = mysql_fetch_array( $cnt )) {
			$fno=$row['firno'];
				echo"<li    class=\"menu\">";
					//echo"<h3>January 31, 2008</h3>";
				echo"<h3 >";
					
					echo" <a href=\"usersession.php?fn=$fno\">";
					echo $row['topic'];
					echo"</a>";
					
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp";
echo  $row['todaydate'];
echo"</h3>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp";

					
					echo"<br/>";
					echo"<p>";
				//	echo $row['description'];
					echo"</p></li>";
					}
					echo"</ul>";
					
					
					*/
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