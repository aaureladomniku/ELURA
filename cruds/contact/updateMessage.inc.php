<?php
include_once 'ContactCrud.php';

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $contactCrud = new ContactCrud();
    $contactCrud->updateMessage($id, $name, $phone, $email, $message);

    header('Location: ../../html/dashboard.php');
    exit;
}
