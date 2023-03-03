<?php
            include_once('config.php');
            $sql = "SELECT * FROM users";
            $getUsers = $con->prepare($sql);
            $getUsers->execute();
            $users=$getUsers->fetchAll();

            
?>

