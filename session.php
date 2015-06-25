<?php
session_start();
$name=$_GET['fn'];
$_SESSION['name']=$name;
header('Location:addcomments.php');

?>