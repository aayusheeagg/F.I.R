<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add Coments</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- start header -->
<div id="header">
	<h1><a href="#"></a></h1>
		<h2><a href="http://www.metamorphozis.com/" id="metamorph">Design by Metamorphosis Design</a></h2>
</div>
<!-- end #header -->
<div id="page">
	<div id="content">
	  <div class="post">
		<h1 class="title">FIR's on Files</h1>
			<p>
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
		 
		// $fn=$_GET['fn'];
	//	echo $fn;
		 $fn=$_SESSION['name'];
		 
			$cnt=mysql_query("select * from firs where firno=$fn");
			//echo"<ul  >";
			//$fn;
			
			//while($row = mysql_fetch_array( $cnt )) {
			$row = mysql_fetch_array( $cnt );
			//$fno=$row['firno'];
				//echo"<li    class=\"menu\">";
					//echo"<h3>January 31, 2008</h3>";
				//echo"<h3 >";
					
					//echo" <a href=\"fir.php?fn=$fno\"> $row['topic']";
					
				//	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp";
//echo  $row['todaydate'];
//echo"</h3>";
//echo "&nbsp;&nbsp;&nbsp;&nbsp";

					
					//echo"<br/>";
					//echo"<p>";
				//	echo $row['description'];
					//echo"</p></li>";
					//}
					//echo"</ul>";
					//$name=$_POST['name'];
					//echo"$name bchbvccvhuv";
					
					
					
					//echo $_SESSION['id'];
					//echo $fn;
			echo"<table width=\"403\" border=\"1\" height=\"150\" >";
              echo"<tr>";
                echo"<th width=\"99\" scope=\"row\">TOPIC</th>";
                echo"<td width=\"264\"> &nbsp;";
				echo $row['topic'];
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">DESCRIPTION</th>";
                echo"<td> &nbsp;";
				echo $row['description'];
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">DATE</th>";
                echo"<td> &nbsp;";
				echo $row['todaydate'];
				echo"</td>";
              echo"</tr>";
              echo"<tr>";
                echo"<th scope=\"row\">TIME</th>";
                echo"<td> &nbsp;";
				echo $row['todaytime'];
				echo"</td>";
              echo"</tr>";
            echo"</table>";
					
					/*echo"<br> <h4>Topic:</h4> ";
					echo $row['topic'];
					echo"<br> <h4>Description:</h4> ";
					echo $row['description'];
					echo"<br> ";
					echo $row['todaydate'];
					echo"<br>";
					echo $row['todaytime'];
					*/
					echo "<br /><br /><h1>Post comments</h1>";
		 
			echo "<form action=\"com.php\" method =post>";		
//			echo "<textarea  size=\"14\" name=\"comment\" type=\"text\">";
			echo"<textarea name=\"comment\" rows=\"3\" width=\"11em\" cols=\"16\"  title=\"Comment\" ></textarea>";
			echo"<input name=fno type=hidden value=\"$fn\">";
			echo "<br ><p style=\" margin-top: 10px\"><input type=\"submit\" value=\"Comment\">";
			echo"</form>";
		 		
					
			echo "<br />";
			
			
			
			$fn=$_SESSION['name'];
			
			
		$cnt1=mysql_query("select * from comments where firno=$fn order by cmtno desc");
		 
		 echo"<h1>Comments :</h1>";
		 echo"<div style=\"border-top: groove #CCCCCC; border-right: groove #CCCCCC; border-left: groove #CCCCCC; border-bottom: 1px groove #CCCCCC; margin-top: 10px;\">";
		 $count=1;
		 while(($row1 = mysql_fetch_array( $cnt1 ))&& ($count<=8)) {
		 echo"<p style=\"margin-top:15px; margin-bottom: 0px; margin-left: 10px\">\" <strong><u>";
		  echo $row1['name'];
		   $count++;
		  echo"</u> </strong>\" says:</p>";
		  echo"<p style=\"margin-top:15px; margin-bottom: 0px; margin-left: 25px\">";
		  echo $row1['cmnt'];
		  echo"</p>";
		 echo"<br />";
		 echo"<div style=\"border:1px groove #CCCCCC; margin-top: 0px;\"></div>";
		 
		 }
		 
		 
					
					
					echo"</div>";
					
					
					?>
	    </p>
			
			
	  </div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<div id="menu" class="box">
			<h2 class="title">Menu</h2>
			<ul>
				<li class="first"><a href="cop.php">Home</a></li>
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