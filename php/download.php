<?php

$dir = "../download/system sort.exe";
$filename = "system sort.exe";


header("Cache-Control: public");
header("Content-Description: FIle Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/zip");
header("Content-Transfer-Emcoding: binary");

readfile($dir);

$to = "eMail";
$subject = "Mail From website";
$txt ="Download from your website :)";
$headers = "From: noreply@stuff.de";

mail($to,$subject,$txt,$headers);

//redirect
header("Location:../index.html");
?>
