<?php
            include_once('config.php');
            $sql = "SELECT * FROM users";
            $getUsers = $con->prepare($sql);
            $getUsers->execute();
            $users=$getUsers->fetchAll();

            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Users</title>
    <style>
		table
		{
			border: 1px solid black;
        }
		tr,td,th
		{
			border: 1px solid black;	
		}
		table,tr,td
		{
			border-collapse: collapse;
		}
		td
		{
			padding: 10px;
        }
	</style>
</head>
<body>
        <table style="width: 90%">
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php
                foreach($users as $user)
                { ?>
                    <tr>
                        <td><?php echo $user['id']; $id=$user['id']?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo "<a href='deleteUser.php?id=$id'>Delete</a>"; echo "<br>"; echo "<a href='editUser.php?id=$id'>Update</a>"; ?></td>
                    </tr>
          <?php }
            ?>

        </table>
    
</body>
</html>

