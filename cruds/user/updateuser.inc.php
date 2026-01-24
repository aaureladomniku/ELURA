<?php


include_once 'UserCrud.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $userCrud = new UserCrud();
    $userCrud->updateUser($id, $name, $email);

    header('Location: ../../html/dashboard.php');
    exit;
}
