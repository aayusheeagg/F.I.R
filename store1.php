<?php
$link = mysql_connect("localhost", "root", "");
        if (!$link) {
          //  echo "<p>Could not connect to the server </p>\n";
          //  echo mysql_error();
        }else{
          //  echo "<p>Successfully connected to the server </p>\n";
         
        }
		
		$dbcheck = mysql_select_db('fir');
        if (!$dbcheck) {
          //  echo mysql_error();
        }else{
          //  echo "<p>Successfully connected to the database '" . "fir" . "'</p>\n";
}

$name=$_POST['name1'];
$address=$_POST['address'];
$voterid=$_POST['voterid'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$result=mysql_query("select * from userdetail ") or die(mysql_error());
$row =mysql_fetch_array($result);
$flag=0;
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) 
{
	// Print out the contents of each row into a table
	if( $row['voterid']==$voterid )
	{
         $flag=1;
      
     }
 }

if($flag==0)
{
     $_SESSION['id']=$name;

mysql_query("insert into userdetail values(\"$name\",\"$address\",\"$voterid\",\"$password\",\"$contactno\",\"$emailid\")") or die(mysql_error());
header('Location:login.html');
}


else
{
header('Location:alreadyregistered.php');
}
?>