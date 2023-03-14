<?php
$id = $_GET['id'];
include_once('config.php');
$sql = "SELECT * FROM users WHERE id=:id";
$getUsers = $con->prepare($sql);
$getUsers->bindParam(':id', $id);
$getUsers->execute();
$user=$getUsers->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
    <form action="updateUser.php" method="post">
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $user['email'];?>">
        <input type="hidden" name="id" value="<?=$id;?>">
        <button type="submit" name="submit">Update</button>
    </form>                                              

</body>
</html>