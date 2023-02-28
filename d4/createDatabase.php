<?php
$host = "localhost";
$user = "root";
$pass = "";
try{
    $con= new PDO("mysql:host=$host",$user,$pass);
    $sql = "CREATE DATABASE testdb";
    $con->exec($sql);
    echo "Database created succesfuly";
}catch(Exception $e){
    echo "Dotabase has not been created !";
}

?>