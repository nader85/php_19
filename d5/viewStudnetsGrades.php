<?php
            include_once('config.php');
            $sql = "SELECT students.name as name, grades.grade as grade, subjects.name as subject, subjects.teacher as teacher FROM students JOIN grades ON students.id = grades.student_id JOIN subjects ON grades.subject_id = subjects.id WHERE students.id = '1'";
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
                <th>Name</th>
                <th>Subject</th>
                <th>Teacher</th>
                <th>Grade</th>
            </tr>
            <?php
                foreach($users as $user)
                { ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['subject']; ?></td>
                        <td><?php echo $user['teacher']; ?></td>
                        <td><?php echo $user['grade']; ?></td>
                    </tr>
          <?php }
            ?>

        </table>
    
</body>
</html>

