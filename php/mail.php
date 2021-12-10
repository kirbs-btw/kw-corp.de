<?php
//get data from form
$email= $_POST['eMail'];

if (!empty($email)){
	$host = "secret";
	$dbUsername = "secret";
	$dbPassword = "secret";
	$dbName = "secret";
	
	//conection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	
	if (mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else{
		$sql = "INSERT INTO mail (mail) VALUES('$email');";
		mysqli_query($conn, $sql);
	}
	
	
}


//redirect
header("Location:../index.html");
?>
