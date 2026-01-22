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
    <style>

          * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            
            width: 650px;
            transition: transform 0.2s;
        }

        form:hover {
            transform: translateY(-2px);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0,123,255,0.2);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            background: #007BFF;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        button:hover {
            background: #0056b3;
            transform: scale(1.02);
        }

        @media (max-width: 500px) {
            
            form {
                padding: 50px;
                width: 93%;
                height: 600px;
            }

            h2 {
                font-size: 40px;
            }
           
        }
    </style>
    </style>


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


