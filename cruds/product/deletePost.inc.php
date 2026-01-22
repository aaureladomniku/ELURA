<?php


include_once 'productCrud.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $productCrud=new productCrud();
    $productCrud->deleteProduct($id);

    header('Location: ../../html/dashboard.php');
    exit;
}
?>