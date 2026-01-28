<?php



require_once 'productCrud.php';

$id = $_GET['id'];

$product = new productCrud();
$post = $product->getProductById($id);
?>



<!DOCTYPE html>
<html>
<head>
    <title> Update Product</title>
  <link rel="stylesheet" href="../../css/update.css">

</head>
<body>


<form action="updateProduct.inc.php" method="POST">


<h2>Update Product</h2>
    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <label>Title:</label>
    <input type="text" name="upTitle" value="<?= htmlspecialchars($post['title']) ?>">

    <label for="">Description</label>
    <input type="text" name="upDescription" value="<?= htmlspecialchars($post['description']) ?>">


    
    <label for="">Price</label>
    <input type="number" name="upPrice" value="<?= htmlspecialchars($post['price']) ?>">





    <button type="submit" name="update">Update</button>
</form>

</body>
</html>


