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
<script src="../../js/update.js" defer></script>
</head>
<body>


<form action="updateProduct.inc.php" id="updateForm"  method="POST">


<h2>Update Product</h2>
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    

    <label>Title:</label>
    <input type="text" name="upTitle" aria-live="polite" value="<?= htmlspecialchars($post['title']) ?>">
    <div class="titleError"></div>

    <label for="">Description</label>
    <input type="text" name="upDescription" aria-live="polite"  value="<?= htmlspecialchars($post['description']) ?>">
   <div class="descError"></div>

    
    <label for="">Price</label>
    <input type="number" name="upPrice" aria-live="polite"  value="<?= htmlspecialchars($post['price']) ?>">
    <div class="priceError"></div>





    <button type="submit" name="update">Update</button>
</form>

</body>
</html>


