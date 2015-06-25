<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Status</title>
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
		<h1 class="title">Current Status</h1>
		
			
<?php 
	session_start();			
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
	 
	 
	 echo"       <p align=\"right\"><a href=\"coplogout.php\">LogOut</a></p>";
		 
			
		
		 
		 
		 
		 
		 
		 
		 $ffno=$_POST['firno'];
		 $top=$_POST['topic'];
		 //echo"$ffno";
		 //echo"$top";
			$cnt=mysql_query("select firstatus.firno,firs.copid,firstatus.status,filerdetails.name,firstatus.topic,firs.todaydate,firstatus.closeddate from filerdetails,firs,firstatus where firstatus.firno=filerdetails.firno and filerdetails.firno=firs.firno and firstatus.firno=\"$ffno\" and firstatus.topic=\"$top\"  ");
			
			$row = mysql_fetch_array( $cnt );
			if($row==NULL)
			{
			echo"No Such Complaint exist";
			}
			else{
$fno= $row['firno'];
$status= $row['status'];
$name= $row['name'];
$topic= $row['topic'];
$ondate=$row['todaydate'];
$closedate=$row['closeddate'];
$cid=$row['copid'];
if($row['closeddate']=="0000-00-00")
{
	$closedate="Not Closed";
}
else{
$closedate=$row['closeddate'];
}

echo"<div class=\"box\"><br />";

echo"<table width=\"403\" border=\"1\" height=\"200\" >";
              echo"<tr>";
                echo"<th width=\"120\" scope=\"row\">FIR No.</th>";
                echo"<td width=\"244\"> &nbsp;";
				echo "$fno";
				echo"</td>";
              echo"</tr>";
			 
			 echo"<tr>";
                echo"<th scope=\"row\">NAME</th>";
                echo"<td> &nbsp;";
				echo "$name";
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">TOPIC</th>";
                echo"<td> &nbsp;";
				echo "$topic";
				echo"</td>";
              echo"</tr>";
			  echo"<tr>";
                echo"<th scope=\"row\">COP ASSIGNED</th>";
                echo"<td> &nbsp; ";
				if("$cid"==NULL)
				{
				echo" ---  ";
				}
				else{
				echo "$cid";
				}
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">ON DATE</th>";
                echo"<td> &nbsp;";
				echo "$ondate";
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">STATUS</th>";
                echo"<td> &nbsp;";
				echo "$status";
				echo"</td>";
              echo"</tr>";
			  echo"<th scope=\"row\">CLOSE DATE</th>";
                echo"<td> &nbsp;";
				echo "$closedate";
				echo"</td>";
              echo"</tr>";
            echo"</table>";
			


echo"</div>";
}



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