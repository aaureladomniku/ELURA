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


<form action="updateProduct.inc.php" id="update"  method="POST">


<h2>Update Product</h2>
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    

    <label>Title:</label>
    <input type="text" name="upTitle"  value="<?= htmlspecialchars($post['title']) ?>">
    <div class="titleError" aria-live="polite"></div>

    <label for="">Description</label>
    <input type="text" name="upDescription" value="<?= htmlspecialchars($post['description']) ?>">
   <div class="descError" aria-live="polite"  ></div>

    
    <label for="">Price</label>
    <input type="number" name="upPrice" aria-live="polite"  value="<?= htmlspecialchars($post['price']) ?>">
    <div class="priceError"></div>





    <button type="submit" name="update">Update</button>
</form>

</body>
</html>


