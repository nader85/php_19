<?php
include_once('config.php');

if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $cid = $_POST['cid'];
$sql = "UPDATE products SET name=:pname, category_id=:cid WHERE id=:id";
$getProducts = $con->prepare($sql);
$getProducts->bindParam(':id', $id);
$getProducts->bindParam(':pname', $pname);
$getProducts->bindParam(':cid', $cid);
$getProducts->execute();
header('Location:viewProducts.php');
}
?>