<?php
include_once('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";

$getUsers = $con->prepare($sql);

$getUsers->bindParam(':id', $id);

$getUsers->execute();

header('Location:viewAllUsesrs.php');

?>