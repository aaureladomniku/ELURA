<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

  include_once __DIR__ . '/../../SQL/DbConnection.php';
    include_once 'loginController.php';

    $login = new LoginController($email, $password);
    $login->processLogin();

} else {
   header("Location: ../../html/login.php");
    exit();
}

?>