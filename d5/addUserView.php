<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>
<body>
        <form action="addUser.php" method="POST">
            <input type="text" name="uname" placeholder="Username"></br>
            <input type="password" name="pass" placeholder="Password"></br>
            <input type="email" name="email" placeholder="Email"></br>
            <button type="submit" name="submit">Add</button>
        </form>
</body>
</html>