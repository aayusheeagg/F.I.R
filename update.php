<?php
session_start();
$cid=$_SESSION['id'];
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
$flag=0;
$fno=$_POST['fno'];
$det=$_POST['message'];
$st=$_POST['status'];




$res=mysql_query("select firno from firs where copid=\"$cid\"");
while($row = mysql_fetch_array( $res ))
{
if($row['firno']==$fno){
$flag=1;
}
}

if($flag==1){

mysql_query("update firstatus set status=\"$st\" where firno=\"$fno\"");
mysql_query("update firstatus set accuseddetail=\"$det\" where firno=\"$fno\"");
header('Location:cop.php');

}

else
{
$_SESSION['chk']=2;
header('Location:copfeedback.php');

}

/*$row = mysql_fetch_array( $cnt );
$cont= $row['max(firno)'];

$cn1t=mysql_query("select CURDATE() from dual");
$row1 = mysql_fetch_array( $cn1t );
$con1t= $row1['CURDATE()'];
//echo $con1t;

$cn11t=mysql_query("select CURTIME() from dual");
$row11 = mysql_fetch_array( $cn11t );
$con11t= $row11['CURTIME()'];
//echo $con11t;


//echo $cont;
$cont+=1;
//echo"<br> $cnt";
$topic=$_POST['topic'];
$desc=$_POST['description'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['phn'];


$min=mysql_query("select min(cases) as num from cop ") or die(mysql_error());
$mcop=mysql_fetch_array($min);
$num= $mcop['num'];




$res=mysql_query("select copid from cop where cases=\"$num\"") or die(mysql_error());
$row=mysql_fetch_array($res);
$cid=$row['copid'];
 mysql_query("insert into firs values($cont,\"$topic\",\"$desc\",\"$con1t\",\"$con11t\",\"$cid\")") or die(mysql_error());
$num+=1;
 mysql_query("insert into filerdetails values($cont,\"$name\",\"$address\",\"$email\",\"$contact\")") or die(mysql_error());
 
 mysql_query("insert into firstatus values($cont,\"$topic\",\"pending\",\"0000-00-00\")") or die(mysql_error());
 
  mysql_query("update cop set cases=\"$num\" where copid=\"$cid\"") or die(mysql_error());

header('Location:registered.php');

// keeps getting the next row until there are no more to get

//  $row = mysql_fetch_array( $result );

*/
?>