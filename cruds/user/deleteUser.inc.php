<?php


include_once 'UserCrud.php';;

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $userCrud = new UserCrud();
    $userCrud->deleteUser($id);

    header('Location: ../../html/dashboard.php');
    exit;
}
?>