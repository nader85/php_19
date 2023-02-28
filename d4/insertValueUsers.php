<?php
try {

  $pdo = new PDO('mysql:host=localhost;dbname=testdb', "root", "");
  $username = "user";
  $tempPass = "user";
  $password = password_hash($tempPass, PASSWORD_DEFAULT);
  // Insert statment for SQL 
  $sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";
  // Execute the statement using the exec() method of the PDO object
  $pdo->exec($sql);

  echo "New record created successfully.";

  $lastId = $pdo->lastInsertId();

  echo "Last inserted user id is $lastId";

} catch(PDOException $e) {
  echo $e->getMessage();
}
?>