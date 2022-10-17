<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "AG MNC CORP";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}

?>