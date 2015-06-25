<?php
session_start();
$name1=$_GET['fn'];
$_SESSION['name1']=$name1;
header('Location:fir1.php');

?>