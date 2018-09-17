<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbName = "sms";

$connection = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);

if ($connection->connect_error) {
	die("Connection Failed". $conn->connect_error);
}		


?>