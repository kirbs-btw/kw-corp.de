<?php

$email= $_POST['mail'];
$name = $_POST['name'];
$text = $_POST['feedback'];

$to = "mail";
$subject = "Feedback from: ". $name;
$txt ="Feedback: " . $text .  "\n Name: ". $name . "\n e-mail: " . $email;
$headers = "From: noreply@stuff.de";

mail($to,$subject,$txt,$headers);

//redirect
header("Location:../index.html");
?>
