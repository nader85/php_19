<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb";
try{
    $con= new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $sql2 = "CREATE TABLE categories (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL
        )";
    $sql = "CREATE TABLE products (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        category_id INT(11) NOT NULL,
        FOREIGN KEY (category_id) REFERENCES categories(id)
        )";
    $con->exec($sql2);
    $con->exec($sql);
    echo "TABLEs category and products created succesfuly";
}catch(Exception $e){
    echo $e->getMessage();
}

?>