<?php
include_once 'ContactCrud.php';

if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $contactCrud = new ContactCrud();
    $contactCrud->deleteMessage($id);

    header('Location: ../../html/dashboard.php');
    exit;
}
