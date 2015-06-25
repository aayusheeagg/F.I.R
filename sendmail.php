<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];
//Save visitor name and entered message into one variable:

$to      = 'pulkitarora29@gmail.com';
$subject = 'Mock Feedback ';

//$message = "Name:$name";

//$message .= "Email:$email";

$message = "$comments";
$message .= "          ";
$message .= "From:$name";
$message .= "Email:$email";

$headers = "";

mail($to, $subject, $message, $headers);
//echo"Your mail has been sent";
header('location:userhome.php');
//echo"Your mail has been sent";
?>

