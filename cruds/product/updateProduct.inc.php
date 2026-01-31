<?php

session_start();
$updatedBy = $_SESSION['user_id'];
require_once 'productCrud.php';

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['update'])){
   $id = $_POST['id'];
    $title = $_POST['upTitle'];
    $description = $_POST['upDescription'];
    $price = $_POST['upPrice'];


$productCrud=new productCrud();
$productCrud->updateProduct($id,$title,$description,$price,$updatedBy);

header("Location: ../../html/dashboard.php");
exit;
}

?>