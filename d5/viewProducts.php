<?php
            include_once('config.php');
            $sql = "SELECT products.id as id, products.name as name, categories.name as cname  FROM products JOIN categories ON products.category_id = categories.id";
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
                <th>Product Name</th>
                <th>Category</th>
            </tr>
            <?php
                foreach($users as $user)
                { ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['cname']; ?></td>
                    </tr>
          <?php }
            ?>

        </table>
    
</body>
</html>

