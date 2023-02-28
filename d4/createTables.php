<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";
try{
    $con= new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $sql = "CREATE TABLE users (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        pass VARCHAR(255) NOT NULL 
        )";
    $con->exec($sql);
    echo "TABLE users created succesfuly";
}catch(Exception $e){
    echo $e->getMessage();
}

?>