<?php
session_start();
$no=$_GET['fn'];
$_SESSION['cop']=$no;
header('Location:copfir.php');
?>

