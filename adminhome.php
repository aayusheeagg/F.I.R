<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home | Admin</title>
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
		<h1 class="title">FIR's on Files</h1>
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
	 
	 
	 echo"       <p align=\"right\"><a href=\"adminlogout.php\">LogOut</a></p>";
		 
		 
		 
		 //echo $_SESSION['id'];
		// $_SESSION['chk']=0;
		 
		 $count=1;
			$cnt=mysql_query("select firno,topic,status from firstatus where firno>0 and status!=\"closed\" order by firno desc");
			echo"<table width=\"400\" border=\"1\" cellspacing=\"0\"cellpadding=\"5\">";
			echo"<tr><th scope=\"col\" height=\"40px\"><strong>FIR No.</strong></th>";
			echo"<th scope=\"col\" height=\"40px\"><strong>TOPIC</strong></th>";
    		echo"<th scope=\"col\" height=\"40px\"><strong>STATUS</strong></th></tr>";

    
  
			
			while(($row = mysql_fetch_array( $cnt ))&& ($count<=8) ) {
				
    			$fno=$row['firno'];
				
					$count++;
					//echo"<h3>January 31, 2008</h3>";
				
					
					//$_SESSION['name']=$fno;
					echo"<tr height=\"60px\"><td><div align=\"center\">";
					echo $row['firno'];
					echo"</div></td><td><div align=\"center\"><a href=\"adminupdate.php?fn=$fno\">";
					echo $row['topic'];
					echo"</a></div></td>  <td><div align=\"center\">";
					echo$row['status'];
					echo"</div></td></tr>";
				
					
					

				
					
				/*	$cnt1=mysql_query("select * from comments where firno=$fn");
			echo"<ul  >";
			while($row1 = mysql_fetch_array( $cnt1 )) {
			echo $row1['cmnt'];
			
			
			}*/
					}
					echo"</table>";
					
					
					
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
				<li><a href="adminhome.php">Home</a></li>
				<!--<li><a href="copfeedback.php">Feedback</a></li>-->
				<li><a href="admincheckstatus.php">Check Status</a></li>
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