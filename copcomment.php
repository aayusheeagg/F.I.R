<?php
session_start();
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



	$comment=$_POST['comment'];
	$fno=$_POST['fno'];
	$cid=$_SESSION['id'];

$result1=mysql_query("select max(cmtno) as sno from comments") or die(mysql_error());


$row1 = mysql_fetch_array( $result1 );
$sno=$row1['sno'];
$sno+=1;



$result=mysql_query("select name from cop where copid=\"$cid\" ") or die(mysql_error());


$row = mysql_fetch_array( $result );
$name=$row['name'];

//echo"$fno";

//echo $msg;
 mysql_query("insert into  comments values(\"$sno\",$fno,\"$name\",\"$comment\",\"$cid\")") or die(mysql_error());
 
 $_SESSION['ff']=$fno;
 

// mysql_query("insert into filerdetails values($cont,\"$name\",\"$address\",\"$email\",\"$contact\")") or die(mysql_error());
 
 //mysql_query("insert into firstatus values($cont,\"$topic\",\"pending\",\"0000-00-00\")") or die(mysql_error());
//echo $fno;
header('Location:copfir.php');

// keeps getting the next row until there are no more to get

//  $row = mysql_fetch_array( $result );
?>