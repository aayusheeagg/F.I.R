<?php

session_start();
$_SESSION['in']=1;
//session_destroy();
header('Location:login1.html');
?>

