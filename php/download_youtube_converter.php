<?php

$dir = "../files/youtube_converter/setup.exe";
$filename = "setup.exe";


header("Cache-Control: public");
header("Content-Description: FIle Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/zip");
header("Content-Transfer-Emcoding: binary");

readfile($dir);

//redirect
header("Location:../index.html");
?>
