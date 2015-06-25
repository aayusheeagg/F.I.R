<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Incorrect Login</title>
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
		<h1 class="title">Incorrect Login</h1>
			<?php
session_start();
$link =mysql_connect("localhost", "root", "");
//$link = mysql_connect("localhost", "root", "123");
        if (!$link) {
      //      echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
           // echo mysql_error();
        }else{
    //        echo "<p>Successfully connected to the server '" . $hostname . "'</p>\n";
         
        }
$dbcheck = mysql_select_db("fir");
        if (!$dbcheck) {
         //   echo mysql_error();
        }else{
         //   echo "<p>Successfully connected to the database '" . "userlogin" . "'</p>\n";
}

/* Gather data from form variable */
$name = $_POST['login_username'];
 $password = $_POST['secretkey'];

/* Perform SQL query to catch data */





$result = mysql_query("SELECT * FROM userdetail")
or die(mysql_error());

$flag=0;
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	if( $row['name']==$name && $row['password']==$password)
	{
         $flag=1;
      
           }


 }

if($flag==1)
{
     $_SESSION['id']=$name;

 header( 'Location: userhome.php' ) ;
}


else
{
echo"The username you entered does not exist.<br>";
echo"Please check your Name or E-mail.<br><br />";
echo"<a href=\"login.html\"/><u>Click here</u></a> to login again.";
}

$_SESSION['in']=0;


?>
		
		</div>
	</div>
	<!-- end #content -->
	<div id="sidebar">
		<div id="menu" class="box">
			<h2 class="title">Menu</h2>
			<ul>
				<li class="first"><a href="index.php"><img src=images/home.jpg /></a></li>
				
				<li><a href="login.html">User Login</a></li>
				<li><a href="login1.html">Cop Login</a></li>
				<li><a href="login1.html">Admin Login</a></li>
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