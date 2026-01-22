<?php

require_once 'fileController.php';
include_once __DIR__ . '/../../SQL/DbConnection.php';
include_once 'productCrud.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    $file = $_FILES['img'];
    $rating=4;
    $reviews=14;

$errors = [];
$imageErrors = validateImage($file);

$errors = array_merge($errors, $imageErrors);


  
    $folder = 'uploads';
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }

    
    if (empty($errors)) {
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $newName = uniqid('img_', true) . '.' . $ext;
        $uploadPath = $folder . '/' . $newName;

        move_uploaded_file($file['tmp_name'], $uploadPath);

      
         $productCrud = new productCrud();
     $productCrud->createProduct(
        $title,
        $description,
        $price,
        $newName,
          $rating,
          $reviews
    );

    header("Location: ../../html/Dashboard.php");
    exit;
    }

    
}


?>