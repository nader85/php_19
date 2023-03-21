<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $grade = $_POST['grade'];

$sql = "UPDATE grades SET grade=:grade WHERE id=:id";
$getProducts = $con->prepare($sql);
$getProducts->bindParam(':id', $id);
$getProducts->bindParam(':grade', $grade);
$getProducts->execute();
header('Location:viewStudnetsGrades.php');
}
?>