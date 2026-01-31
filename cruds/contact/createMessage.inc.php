<?php
include_once 'ContactCrud.php';
session_start();

if (isset($_POST['message'])) {

    $name    = trim($_POST['name'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $user_id = $_SESSION['user_id'] ?? null;

    $contactCrud = new ContactCrud();
    $success = $contactCrud->createMessage($user_id, $name, $phone, $email, $message);

    if ($success) {
        header("Location: ../../html/Home.php?");
        exit;
    }
} else {
    header("Location: ../../html/Contact.php?");
    exit;
}
