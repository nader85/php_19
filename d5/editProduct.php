<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
<?php
$id = $_GET['id'];
include_once('config.php');
$sql = "SELECT * FROM products WHERE id=:id";
$getProducts = $con->prepare($sql);
$getProducts->bindParam(':id', $id);
$getProducts->execute();
$product=$getProducts->fetch();

$sql2 = "SELECT * FROM categories";
$getCategories = $con->prepare($sql2);
$getCategories->execute();
$categories=$getCategories->fetchAll();

?>

<form action="updateProduct.php" method="post">
        <label for="pname">Product Name</label>
        <input type="text" name="pname" id="pname" value="<?php echo $product['name']; ?>"><br>
        <label for="category">Category</label>
        <select name="cid" id="cid">
            <?php foreach($categories as $category) {?>
            <option value="<?=$category['id']; ?>"><?=$category['name']?></option>
            <?php } ?>
        </select>
        <input type="hidden" name="id" value="<?=$product['id'];?>">
        <button type="submit" name="submit">Update</button>
    </form>                                              

</body>
</html>