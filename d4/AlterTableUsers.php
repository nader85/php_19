<?php
try {

  $pdo = new PDO('mysql:host=localhost;dbname=testdb', "root", "");
 
  $sql = "ALTER TABLE users add email VARCHAR(255)";
  
  $pdo->exec($sql);

  echo "New Column created successfully.";

} catch(PDOException $e) {
  echo $e->getMessage();
}
?>