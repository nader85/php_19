<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $password = password_hash($pass, PASSWORD_DEFAULT);

$sql = "UPDATE users SET pass=:pass, email=:email WHERE id=:id";

$getUsers = $con->prepare($sql);

$getUsers->bindParam(':id', $id);
$getUsers->bindParam(':pass', $password);
$getUsers->bindParam(':email', $email);

$getUsers->execute();

header('Location:viewAllUsesrs.php');
}
?>