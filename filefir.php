<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>File FIR</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function validate()
{
	var name=document.filefir.name.value;
	
	var description=document.filefir.description.value;
	var address=document.filefir.address.value;
	
	var contact=document.filefir.phn.value;
	var email=document.filefir.email.value;
	
	exp=/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
       exp1=/\d{10}/;
	   
            if(name==="" || description==="" || address==="" || contact==="" || email==="")
             {
                 alert("None of the fields can be left blank.");
                 return false;
             }
			 
			 
             else if((email).match(exp)==null)
                 {

                        alert("Please enter a valid email id.");
                        return false;
                 }
				 else if((contact).match(exp1)==null)
                     {
                         alert("Please enter a valid 10 digit phone number.");
                         return false;
                     }
				 
             else
                     {
                         return true;
                     }


}
</script>


</head>
<body>
<!-- start header -->
<div id="header">
	
</div>
<!-- end #header -->
<div id="page">
	<div id="content">
		<div class="post">
		<h1 class="title">Lodge FIR</h1>
     
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
		 
		//echo $_SESSION['in'];
		 if($_SESSION['in']==1)
		 {
		 echo"Please login to continue";
		 }
		 
else{		
	 
	 
	 echo"       <p align=\"right\"><a href=\"logout.php\">LogOut</a></p>";
       echo"     <h4>Enter the details of the Victim :</h4>";
		echo"	<p class=\"meta\"><form name=\"filefir\" action=\"store.php\" method=\"post\" onsubmit=\"return validate();\">";
      echo"<div>";
            echo"<div style=\"float:left; width:49%;\">";
           
            
            echo"Name<br /><br />";
            echo"Address <br /><br />";
            echo"E-Mail Id<br /><br />";
            echo"Mobile Number<br /><br />";
            echo" Topic <br /><br /><br />";
            echo"Description <br /><br /><br /><br /><br /><br /><br />";
            echo"</div>"; 
            
            echo"<div style=\"float:right; width:49%;\">";
            
            echo"<input type=\"text\"   name=\"name\" width=\"11.0em\" value=\"\"/><br /><br />";
            echo"<input type=\"textarea\" name=\"address\" height=\"80\"  title=\"Address\" width=\"11.0em\" value=\"\"/><br /><br />";
            echo"<input type=\"text\"   name=\"email\" width=\"11.0em\" value=\"\"/><br /><br />";
            echo"<input type=\"text\"  name=\"phn\"  maxlength=\"10\" width=\"11.0em\" value=\"\"/><br /><br />";
            echo"<select  name=\"topic\" style=\"margin-right: 0.5em; vertical-align: middle; border-top:solid 1px #000000; border-right: solid 1px #777777; border-bottom: solid 1px #777777; border-left: solid 1px #000000; padding: 0.15em; width: 11.0em;\" >";
				

					echo"<option  >Child Abuse</option>";
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
            echo"<textarea name=\"description\" rows=\"3\" width=\"11em\" cols=\"16\"  title=\"Describe\" ></textarea><br /><br /><br />";
echo"<br /><br />";
            
            
     echo"       </div>";
            

echo"</div>";

echo"<div align=\"center\" style=\"margin-top:0px; margin-left:0px\">";
echo"<br />";
echo"<br /><br />";
echo"<input type=\"submit\" value=\" Submit\" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"reset\" value=\" Clear\" />";
echo"</div>";

echo"</form></h2>";


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