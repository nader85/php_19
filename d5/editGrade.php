<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Grade</title>
</head>
<body>
    <?php
    $sname = $_GET['student'];
    $subject = $_GET['subject'];
    $gid = $_GET['id'];

    include_once('config.php');
$sql = "SELECT * FROM grades WHERE id=:gid";
$getGrades = $con->prepare($sql);
$getGrades->bindParam(':gid', $gid);
$getGrades->execute();
$grade=$getGrades->fetch();

    ?>
    <h1>Change Grade for <?=$sname;?></h1>
    <h2>In subject: <?=$subject?></h2>

    <form action="updateGrade.php" method="post">
        <label for="grade">Grade</label>
        <input type="text" name="grade" id="grade" value="<?=$grade['grade']?>">

        <input type="hidden" name="id" value="<?=$gid;?>">
        <button type="submit" name="submit">Update</button>

    </form>
</body>
</html>