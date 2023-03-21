<?php

session_start();

$user="root";
$pass="";
$server="localhost";
$dbname="testdb";

try {
	
	$con =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}

?>